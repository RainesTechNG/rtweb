<?php

namespace App\Http\Controllers\Api\v1;

use App\Entity\User;
use App\Http\Controllers\Api\WebservicebaseController;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends WebservicebaseController
{
    /**
     * API Register.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $rules = [
            'username' => 'required|max:255|unique:users',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ];
        $input = $request->only(
            'username',
            'email',
            'password',
            'password_confirmation'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $error = $validator->messages()->toJson();

            return response()->json(['success'=> false, 'error'=> $error]);
        }
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $confirmationCode = str_random(30); //Generate verification code
        $user = User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password), 'confirmationCode' => $confirmationCode]);

        $subject = 'Please verify your email address.';
        Mail::send('email.verify', ['name' => $name, 'confirmation_code' => $confirmationCode],
            function ($mail) use ($email, $name, $subject) {
                $mail->from(getenv('FROM_EMAIL_ADDRESS'), 'From Raines Technologies NG');
                $mail->to($email, $name);
                $mail->subject($subject);
            });

        return response()->json(['success'=> true, 'message'=> 'Thanks for signing up! Please check your email to complete your registration.']);
    }

    /**
     * API Verify User.
     *
     * @param $verification_code
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @internal param Request $request
     */
    public function verifyUser($verification_code)
    {
        $user = User::where('confirmationCode', $verification_code)->first();
        if (!is_null($user)) {
            if ($user->confirmed == 1) {
                return response()->json([
                    'success'=> true,
                    'message'=> 'Account already verified..',
                ]);
            }
            $user->update(['confirmed' => 1, 'confirmationCode' => '']);

            return response()->json([
                'success'=> true,
                'message'=> 'You have successfully verified your email address.',
            ]);
        }

        return response()->json(['success'=> false, 'error'=> 'Verification code is invalid.']);
    }

    /**
     * API Login, on success return JWT Auth token.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $rules = [
            'email'    => 'required|email',
            'password' => 'required',
        ];

        $input = $request->only('email', 'password');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            $error = $validator->messages()->toJson();

            return response()->json(['success'=> false, 'error'=> $error]);
        }

        $credentials = [
            'email'     => $request->email,
            'password'  => $request->password,
            'confirmed' => 1,
        ];

        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['success' => false, 'error' => 'Invalid Credentials. Please make sure you entered the right information and you have verified your email address.'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['success' => false, 'error' => 'could_not_create_token'], 500);
        }
        // all good so return the token
        return response()->json(['success' => true, 'data'=> ['token' => $token]]);
    }

    /**
     * Log out
     * Invalidate the token, so user cannot use it anymore
     * They have to relogin to get a new token.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $this->validate($request, ['token' => 'required']);

        try {
            JWTAuth::invalidate($request->input('token'));

            return response()->json(['success' => true]);
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['success' => false, 'error' => 'Failed to logout, please try again.'], 500);
        }
    }

    /**
     * API Recover Password.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function recover(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $error_message = 'Your email address was not found.';

            return response()->json(['success' => false, 'error' => ['email'=> $error_message]], 401);
        }

        try {
            Password::sendResetLink($request->only('email'), function (Message $message) {
                $message->subject('Your Password Reset Link');
            });
        } catch (\Exception $e) {
            //Return with error
            $error_message = $e->getMessage();

            return response()->json(['success' => false, 'error' => $error_message], 401);
        }

        return response()->json([
            'success' => true, 'data'=> ['msg'=> 'A reset email has been sent! Please check your email.'],
        ]);
    }
}
