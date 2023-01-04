<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class PagesController extends Controller
{

    public function index() : Factory | View | Application
    {
        return view('web.pages.index');
    }

    public function contact() : Factory | View | Application
    {
        return view('web.pages.contact');
    }

    public function send(ContactFormRequest $request) : RedirectResponse
    {
        $recipient = env('MAIL_RECIPIENT', 'support@demi.sk');

        Mail::to($recipient)->send(new ContactFormMail($request->all()));

        $not_sent = ! Mail::flushMacros();

        return redirect()->route('web.contact.' . app()->getLocale() )
            ->with([
                'status' => $not_sent ? 'error' : 'success',
                'message' => trans( $not_sent ? 'texts.Your message could not be send' : 'texts.Your message was sent successfully'),
            ]);
    }

}
