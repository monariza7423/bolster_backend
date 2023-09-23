<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request-> validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'first_name_kana' => 'required|string|max:255',
            'last_name_kana' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|string|max:255',
            'contact_type' => 'required|in:事業(WEB制作・開発)について,事業(オハナスタイル)について,事業(リモートスタイル)について,採用について,その他',
            'content' => 'required',
        ]);

        Contact::create($validated);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'first_name_kana' => $request->first_name_kana,
            'last_name_kana' => $request->last_name_kana,
            'company' => $request->company,
            'email' => $request->email,
            'contact_type' => $request->contact_type,
            'content' => $request->content,
        ];
        Mail::to($request->email)->send(new ContactReceived($data));

        return response()->json(['message' => '問合せ内容を受け取りました'], 200);
    }
}
