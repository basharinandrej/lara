<?php

namespace App\Http\Controllers;
use App\Models\Events;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Events::all();
        return view('events/index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->validate([
            "name" => 'required|min:5|max:32',
            "description" => ['required', 'min:10', 'max:255'],
            "duration" => ['required', 'min:2', 'max:255'],
            "start_date" => ['required', 'min:5', 'max:255'],
        ]);

        $event = new Events();
        $event->fill($payload)->save();

        return redirect()->route('events.index')->with(
            'event', 
            'Новый эвент успешно создан: ' . $payload['name']
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Events::findOrFail($id);
        return view('events/show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Events::findOrFail($id);
        return view('events/edit', compact('id', 'event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payload = $request->validate([
            "name" => 'required|min:5|max:32',
            "description" => ['required', 'min:10', 'max:255'],
            "duration" => ['required', 'min:2', 'max:255'],
            "start_date" => ['required', 'min:5', 'max:255'],
        ]);

        $event = Events::findOrFail($id);
        $event->update($payload);

        return redirect()->route('events.index')->with(
            'event', 
            'Событие успешно отредактированно: ' . $payload['name']
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Events::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')->with(
            'event', 
            'Событие успешно удаленно'
        );
    }
}
