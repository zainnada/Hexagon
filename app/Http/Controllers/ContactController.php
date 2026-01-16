<?php

namespace App\Http\Controllers;

use App\Models\Contact_Request;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

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

        $currentLocale = app()->getLocale(); // ar or en
        $otherLocale   = $currentLocale === 'ar' ? 'en' : 'ar';

        // Origin data
        $originalMessage = $request->message;
        $originalSubject = $request->subject;

        // Google Translate
        $translator = new GoogleTranslate($otherLocale, $currentLocale);

        $translatedMessage = $translator->translate($originalMessage);
        $translatedSubject = $translator->translate($originalSubject);

        $contact = new Contact_Request();

        // Static Data (Not for translate)
        $contact->contact_name  = $request->name;
        $contact->contact_email = $request->email;

        // Translate
        $contact->translateOrNew($currentLocale)->contact_subject = $originalSubject;
        $contact->translateOrNew($currentLocale)->contact_message = $originalMessage;

        $contact->translateOrNew($otherLocale)->contact_subject = $translatedSubject;
        $contact->translateOrNew($otherLocale)->contact_message = $translatedMessage;

        $contact->save();

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
