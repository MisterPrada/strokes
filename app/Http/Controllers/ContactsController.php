<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Notifications\ContactForm;
use Illuminate\Support\Facades\Notification;
use App\Helpers\Functions;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts');
    }

    public function contactForm(FeedbackRequest $request){
        $captchaState = Functions::check_google($request->get('g-recaptcha-response'), $request->ip());
        if(!$captchaState)
            return response()->json(['success' => false, 'errors' => 'Ошибка проверки что вы не робот'], 400);

        $form = (object) $request->all();

        Notification::route('mail', 'lesha.skorpion@gmail.com')
            ->notify(new ContactForm($form));


        return response()->json(['success' => true], 200);
    }
}
