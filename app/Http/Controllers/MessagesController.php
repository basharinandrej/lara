<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function __construct() {
        
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();

        return view('messages/index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('messages/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->validate([
            "title" => 'required|min:10|max:32',
            "content" => ['required', 'min:10', 'max:255'],
        ]);

        $message = new Message();
        $message->fill($payload)->save();

        return redirect()->route('messages.index')->with('message', 'MY MSG');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::findOrFail($id);
        return view('messages/show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
