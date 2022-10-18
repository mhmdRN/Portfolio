<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function sendMail(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);
        Mail::to('mohammadramadan1x@gmail.com')->send(new Contact($data));
        return \back()->with('message','Your mail is sent!! Thank You.');
    }
}
