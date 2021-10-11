<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{ 
    public function sendMail(Request $request){
        $contenuMail = [
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'message'=> $request->message
        ];

        // pour envoiyer le donne 
        Mail::to('stsgraur@gmail.com')->send(new Email($contenuMail));
        return redirect()->back()->with("message", "Le mail a bien ete envoyer");
    }
}
