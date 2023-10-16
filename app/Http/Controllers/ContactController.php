<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request)
    {
        $validated = $request->validated();
        $data = $request->all();
        Contact::create($validated);
        Mail::to($request->email)->send(new ContactReceived($data));
        return response()->json(['message' => '問合せ内容を受け取りました'], 200);
    }
}
