<?php

namespace App\Http\Controllers;

use App\Models\Contact_Request;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact_Request::create([
            'contact_name' => $request->name,
            'contact_email' => $request->email,
            'contact_subject' => $request->subject,
            'contact_message' => $request->message,
        ]);

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
