<?php

namespace App\Services;

use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactService
{
    public function storeContact(array $data)
    {
        $contact = Contact::create($data);
        Mail::to(config('mail.admin_email'))->send(new ContactFormSubmitted($contact));

        return $contact;
    }
}
