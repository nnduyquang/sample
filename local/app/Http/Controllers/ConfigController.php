<?php

namespace App\Http\Controllers;

use App\Config;
use App\Http\Requests\ConfigEmailRequest;

class ConfigController extends Controller
{
    public function getEmailConfig()
    {
        $cauhinhs = Config::whereIn('name', ['email-receive', 'email-sender-subject', 'email-receive-subject', 'email-signatures', 'email-sender-content'])->orderBy('order')->get();
        return view('backend.admin.config.mail', compact('cauhinhs'));
    }

    public function saveEmailConfig(ConfigEmailRequest $request)
    {
        $emailReceive = $request->input('email-receive');
        $emailSenderSubject = $request->input('email-sender-subject');
        $emailReceiveSubject = $request->input('email-receive-subject');
        $emailSignatures = $request->input('email-signatures');
        $emailSenderContent = $request->input('email-sender-content');
        $config = Config::where('name', 'email-receive')->first();
        $config->content = $emailReceive;
        $config->save();
        $config = Config::where('name', 'email-sender-subject')->first();
        $config->content = $emailSenderSubject;
        $config->save();
        $config = Config::where('name', 'email-receive-subject')->first();
        $config->content = $emailReceiveSubject;
        $config->save();
        if($emailSignatures) {
            $config = Config::where('name', 'email-signatures')->first();
            $config->content = $emailSignatures;
            $config->save();
        }
        $config = Config::where('name', 'email-sender-content')->first();
        $config->content =  $emailSenderContent;
        $config->save();
        return redirect()->route('config.email.index')
            ->with('success', 'Cấu Hình Email Lưu Thành Công');
    }
}
