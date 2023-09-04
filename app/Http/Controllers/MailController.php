<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        // $request->name;
        // $request->email;
        // $request->topic;
        // $request->message;
        $sms = $request;
        $correo = new ContactanosMailable($sms);
        // view('view.name', compact(array('sms')));
        Mail::to($request->email)->send($correo);
        return redirect('/');
        // return $correo;
    }
}
