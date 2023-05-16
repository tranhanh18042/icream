<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Repository\ContactRepository;
use App\Service\ContactService;
use Illuminate\Http\Request;

class Contact extends Controller
{
    protected $contactService;
    public  function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }
    public function index()
    {
        return view('contact');
    }
    public function store(ContactRequest $request)
    {
        $this->contactService->insertContact($request);
        return redirect()->back();
    }
}
