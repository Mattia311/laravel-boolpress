<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use App\Mail\MarkdownContactFormMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contacts()
    {
        return view("guest.contacts.form");
    }

    public function sendContactForm(Request $request)
    {
        //ddd($request->all());
        $valData = $request->validate([
            'name' => 'required|min:4|max:50',
            'email' => 'required|email',
            'message' => 'required|min:50|max:500'
        ]);
        //ddd($valData);

        //Mail::to('admin@example.com')->send(new ContactFormMail($valData));

        Mail::to('admin@example.com')->send(new MarkdownContactFormMail($valData));

        return redirect()->back()->with('message', 'thanks for your message we will never get back to ya! ');
    }
}
