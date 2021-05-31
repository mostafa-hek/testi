<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function mail()
    {

        $to_name = "mostafa";
        $to_email = "mhek608ganji@gmail.com";
        $data = array("name" => " mr abedi", "body" => "test mail");
        Mail::send('mail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email)->subject('lara mail subject');
        });

    }

}


