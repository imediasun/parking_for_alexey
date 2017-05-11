<?php

namespace App;


use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
class MailService
{

    protected $mailer;



    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendMail($mail)
    {
        if(!Auth::guest()){

         $user= Auth::user();


$this->mailer->raw($mail['message'], function (Message $m) use ($user) {
            $m->to($user->email)->subject($mail['message']);
        });
            dd($user->email);
        }

    }




}