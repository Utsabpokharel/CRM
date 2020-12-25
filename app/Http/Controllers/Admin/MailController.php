<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\sendmail;

class MailController extends Controller
{
    function form()
    {
        return view('admin.mail.form');
    }
    function send(Request $request)
    {
        $mail = new Mail();
        $mail->to = $request->email;
        $mail->message = $request->message;
        Mail::to($mail->to)->send(new sendmail($mail));
        return redirect()->back();
    }
}
