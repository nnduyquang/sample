<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SendingMailToMe extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('mail.mail-to-me',['name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone,'website'=>$request->website,'keyword'=>$request->keyword])->to('trangnh.sml@gmail.com')->subject('Test Email API By Quang Nguyen')->from('nnduyquang@gmail.com','Smartlinks');;
    }
}
