<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThreadBbs;
use App\Http\Requests\StoreThreadBbsRequest;
use App\Http\Requests\UpdateThreadBbsRequest;

class ThreadBbsController extends Controller
{
    public function store(StoreThreadBbsRequest $request)
    {
        $validated = $request->validated();
        $post = ThreadBbs::create($validated);
        return response()->json(['post' => $post], 201);
    }

    public function index()
    {
        $threads = ThreadBbs::all();
        return response()->json($threads);
    }

    public function show($id)
    {
        $thread = ThreadBbs::find($id);
        return response() -> json($thread);
    }

    public function update(UpdateThreadBbsRequest $request, $id)
    {
        $thread = ThreadBbs::findOrFail($id);

        $validatedData = $request->validate();

        $thread->update($validatedData);

        return response()->json(['message' => 'Thread updated successfully', 'data' => $thread]);
    }

    public function destroy($id)
    {
        $thread = ThreadBbs::find($id);

        if (!$thread) {
            return response()->json(['message' => 'Thread not found'], 404);
        }

        $thread->replies()->delete();

        $thread->delete();

        return response()->json(['message' => 'Thread and its replies deleted successfully']);
    }
}
