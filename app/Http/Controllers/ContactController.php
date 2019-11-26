<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
     public function afficher(){
         return view('contact');
     }

     public function postForm(ContactRequest $request){
        Mail::send('form_contact', $request->all(), function($message){
       $message->to('ofissenegal@gmail.com')->subject('Contact');
        });  

        return redirect()->back()->with('successMsg','Message envoyé !');
    }
}
