<?php

namespace App\Mail;


use App\Config;
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
        $emailReceive = Config::where('name', 'email-receive')->first();
        $subjectReceive = Config::where('name', 'email-receive-subject')->first();
        $fromReceive=Config::where('name', 'email-receive-from')->first();
        return $this->view('mail.mail-to-me',['name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone,'website'=>$request->website,'keyword'=>$request->keyword])->to($emailReceive->content)->subject($subjectReceive->content)->from('nnduyquang@gmail.com',$fromReceive->content);;
    }
}
