<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;

use Illuminate\Http\Request;

class MailSend extends Controller
{
    public function mailsend()
    {
        $details = [
            'title' => 'Title: Mail from Real Programmer',
            'body' => 'Body: This is for testing emails using smtp'
        ];

        \Mail::to('edmilsondavidnovela@gmail.com')->send(new SendMail($details));
        return view('emails.thanks');
    }
}

