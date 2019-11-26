<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewletterRequest;
use App\Newletter;
class NewletterController extends Controller
{
     public function savenewletter(NewletterRequest $request){
     $mail=new Newletter;
     $mail->email=$request->email;
     $mail->save(); 
     return redirect()->back();
     }
}
