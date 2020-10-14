<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactView()
    {
        $contacts = Contact::all();
        return view('users.contact-us',compact('contacts'));
    }
}
