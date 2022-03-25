<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Maile;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contact()
    {
        return view('kontakt.contact');
    }

    public function sendEmail(Request $req)
    {
        $data=[
            'name'=>$req->name,
            'email'=>$req->email,
            'message'=>$req->message
        ];
        Mail::to('d.plociennik@adawards.pl')->send(new ContactMail($data));
        DB::table('Mailes')->insert([
            'Imie'=>$req->name,
            'Email'=>$req->email,
            'Wiadomosc'=>$req->message
        ]);
        return view('kontakt.emailsend');
    }


}
