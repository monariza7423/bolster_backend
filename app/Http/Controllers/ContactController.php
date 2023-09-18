<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request-> validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'first_name_kana' => 'required|string|max:255',
            'last_name_kana' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'contact_type' => 'required|in:事業(WEB制作・開発)について,事業(オハナスタイル)について,事業(リモートスタイル)について,採用について,その他',
            'content' => 'required',
        ]);

        Contact::create($validated);

        return response()->json(['message' => '問合せ内容を受け取りました'], 200);
    }
}
