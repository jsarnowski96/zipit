<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactForm;

class ContactFormController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function SendFormData(Request $request) {    
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        ContactForm::create($request->all());

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'new'
        );

        return back()->with('success', 'Dziękujemy za zgłoszenie. Odezwiemy się najszybciej jak to będzie możliwe.');
    }
}