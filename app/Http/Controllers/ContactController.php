<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //

    public function index() {
        return view('welcome');
    }

    public function addContact(Request $request, Contact $contact) {

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if ($contact->checkUniqueEmail($request->email)) {
            return back()->with('status', 'Email already exist..');
        }

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return back()->with('status', 'New contact added...');

    }
}