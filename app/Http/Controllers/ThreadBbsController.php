<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThreadBbs;

class ThreadBbsController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request-> validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

        $post = ThreadBbs::create($validated);

        return response()->json(['post' => $post], 201);
    }

    public function index()
    {
        $threads = ThreadBbs::all();
        return response()->json($threads);
    }
}