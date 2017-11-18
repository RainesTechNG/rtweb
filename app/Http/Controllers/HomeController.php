<?php

namespace App\Http\Controllers;

use App\Entity\ContactMsg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function about($about = null)
    {
        if ($about) {
            if (method_exists($this, $about)) {
                return $this->$about($about);
            }
        }

        return view('about.about', ['about' => 'about-us']);
    }

    public function terms($about)
    {
        return view('about.term', compact('about'));
    }

    public function privacy($about)
    {
        return view('about.privacy', compact('about'));
    }

    public function channels($about)
    {
        return view('about.channels', compact('about'));
    }

    public function contact()
    {
        return view('contact', ['about' => 'contact-us']);
    }

    public function contactPost(Request $request)
    {
        $request->validate([
                'contact-title'        => 'required|min:5|max:255',
                'contact-message'      => 'required|min:10|max:5000',
                'contact-name'         => 'required|min:10|max:255',
                'contact-phone'        => 'required|min:10|max:14',
                'contact-email'        => 'required|email',
                'g-recaptcha-response' => 'required|captcha',
        ]);

        //$contactMsg = ContactMsg::firstOrCreate($request->except(['g-recaptcha-response', '_token']));
        //$contactMsg->save();

        $msg = [
            'title' => 'Message Received!',
            'type'  => 1,
            'body'  => 'Your Message has been received. We will get back to you using the email provided. Have a wonderful day.',

        ];

        if ($request->ajax()) {
            return response()->json($msg);
        }

        return back(200);
    }
}
