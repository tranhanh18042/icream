<?php

namespace App\Repository;

use App\Models\Contact;

class ContactRepository
{
    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function addContact($contact)
    {
        return $this->contact->insert($contact);
    }
}
