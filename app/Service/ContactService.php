<?php

namespace App\Service;

use App\Http\Requests\ContactRequest;
use App\Repository\ContactRepository;

class ContactService
{
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    public function insertContact(ContactRequest $request)
    {
        $contact = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        return $this->contactRepository->addContact($contact);
    }
}
