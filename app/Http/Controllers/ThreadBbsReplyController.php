<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThreadBbsReply;

class ThreadBbsReplyController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'thread_id' => 'required|integer|exists:thread_bbs,id',
            'name' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

        $reply = ThreadBbsReply::create($validated);

        return response()->json(['reply' => $reply], 201);
    }

    public function index()
    {
        $threadId = $request->input('thread_id');
        if ($threadId) {
            $replies = ThreadBbsReply::where('thread_id', $threadId)->get();
        } else {
            $replies = ThreadBbsReply::all();
        }
        return response()->json($replies);
    }
}
