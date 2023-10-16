<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThreadBbsReply;
use App\Http\Requests\StoreThreadBbsReplyRequest;

class ThreadBbsReplyController extends Controller
{
    public function store(StoreThreadBbsReplyRequest $request)
    {
        $validated = $request->validated();
        $reply = ThreadBbsReply::create($validated);
        return response()->json(['reply' => $reply], 201);
    }

    public function index(Request $request)
    {
        $threadId = $request->input('thread_id');
        if ($threadId) {
            $replies = ThreadBbsReply::where('thread_id', $threadId)->get();
        } else {
            $replies = ThreadBbsReply::all();
        }
        return response()->json($replies);
    }

    public function show($replyId)
    {
        $reply = ThreadBbsReply::find($replyId);
        if (!$reply) {
            return response()->json(['message' => 'Reply not found'], 404);
        }

        return response()->json($reply);
    }

    public function update(Request $request, $replyId)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'content' => 'required|string|max:255',
        ]);

        $reply = ThreadBbsReply::find($replyId);
        if (!$reply) {
            return response()->json(['message' => 'Reply not found'], 404);
        }

        $reply->update($validatedData);

        return response()->json(['message' => 'Reply updated successfully']);
    }

    public function destroy($replyId)
    {
        $reply = ThreadBbsReply::find($replyId);
        if (!$reply) {
            return response()->json(['message' => 'Reply not found'], 404);
        }

        $reply->delete();

        return response()->json(['message' => 'Reply deleted successfully']);
    }
}
