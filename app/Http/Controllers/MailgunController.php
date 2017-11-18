<?php

namespace App\Http\Controllers;

use App\Entity\Mails;
use App\Http\Requests\MailgunRequest;
use Mailgun\Mailgun;

class MailgunController extends Controller
{
    public function store(MailgunRequest $request)
    {
        $mailgunMsg = new Mails($request->only(['recipient', 'sender', 'Message-Id', 'subject', 'body-plain', 'stripped-text', 'stripped-html', 'attachment-count', 'attachment-x', 'timestamp', 'token', 'signature', 'message-headers', 'content-id-map']));
        $mailgunMsg->RefId = $request->get('References');
        $mailgunMsg->save();

        //if (self::attachment($request))
            return response('ok', 200);

        //@todo return response('failed', 500);
    }

    private function attachment($request)
    {
        $files = json_decode($request->input('attachments'),true);
        $mg = new Mailgun(config('mailgun.api_key'));
        foreach ($files as $file){
            $fileName = $file['name'];
            $content = $mg->getAttachment($file['url'])->http_response_body;
        }
    }
}