<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index(){

        return view('web.pages.index');
    }

    public function send(ContactFormRequest $request) {
        $recipient = env('MAIL_RECIPIENT', 'support@demi.sk');

        Mail::to($recipient)->send(new ContactFormMail($request->all()));

        $status = trans('Your message was sent successfully');
        $status_code = 'success';

        if(count(Mail::failures()) > 0){
            $status = trans('texts.Your message could not be send');
            $status_code = 'error';
        }

        return view('web.pages.contact', compact('status', 'status_code'));
    }
}
