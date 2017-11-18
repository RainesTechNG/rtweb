<?php
/**
 * Created by PhpStorm.
 * User: raines
 * Date: 10/5/15
 * Time: 8:15 PM
 */

namespace App\Http\Controllers\Auth\Model;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

trait Login
{
    use AuthenticatesUsers;

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        if($this->guard()->attempt(
            $this->credentialsEmail($request), $request->has('remember')
        ))  return true;

        else return $this->guard()->attempt(
            $this->credentialsName($request), $request->has('remember')
        );
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentialsEmail(Request $request)
    {
        return ['email' => $request->get('username'), 'password' => $request->get('password')];
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentialsName(Request $request)
    {
        return ['username' => $request->get('username'), 'password' => $request->get('password')];
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }
}
