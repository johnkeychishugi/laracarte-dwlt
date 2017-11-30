<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest; 
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
    	$message=Message::create($request->only('name','email','message'));


    	$mailable = new ContactMessageCreated($message);

    	Mail::to(config('laracarte.admin_support_email'))
    	      ->send(new ContactMessageCreated($message));

    	flashy('Nous vous repondrons dans les plus brefs delais!');

    	return redirect()->route('home_path');
    }
}
