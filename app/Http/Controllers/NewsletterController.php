<?php

namespace App\Http\Controllers;

use App\Entity\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $record = Newsletter::where('email', $request->get('email'));

        if (!$record->exists()) {
            $newsletter = new Newsletter();
            $newsletter->email = $request->get('email');
            $newsletter->save();
        } else {
            $newsletter = $record->first();
            $newsletter->newsletterSub = 1;
            $newsletter->promotionsSub = 1;
            $newsletter->servicesSub = 1;
            $newsletter->termsSub = 1;

            $newsletter->save();
        }

        $msg = [
            'title' => 'Newsletter Subscription Successful!',
            'type'  => 1,
            'body'  => 'Thank you for subscribing to our Newsletters.',
        ];

        if ($request->ajax()) {
            return response()->json($msg);
        }

        return back();
    }
}
