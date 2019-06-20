<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public function store()
    {
        $data = request()->validate([
            'name'    => 'required|min:2',
            'email'   => 'required|email',
            'message' => 'required|min:10',
            'recaptcha' => 'required|recaptcha'
        ]);

        Mail::to('nathan@nlehman.dev')->send(new ContactFormSubmitted($data));

        return response()->json();
    }
}
