<?php

namespace App\Http\Controllers;

use App\Mail\SendingMailToCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendingMailToMe;


class MailController extends Controller
{
    public function send(Request $request){
        Mail::send(new SendingMailToMe());
        if( count(Mail::failures()) > 0 ) {

            echo "Thua <br />";

//            foreach(Mail::failures as $email_address) {
//                echo " - $email_address <br />";
//            }

        } else {
            Mail::send(new SendingMailToCustomer());
            return response()->json([
                'success' => true
            ]);
        }

    }
}
