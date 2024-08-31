<?php

namespace App\Http\Controllers;

use App\Models\UpcomingEvents;
use Illuminate\Http\Request;

class UpcomingEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
      public function home()
    {
        $homeEvents = UpcomingEvents::limit(2)->get(); // Fetch exactly two events
         return view('Home', compact('homeEvents'));
    }

    public function index()
    {
         $events = UpcomingEvents::all();
        return view('Events', compact('events'));
        
    }
   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'media' => 'nullable|image',
            'status' => 'required|in:upcoming,ongoing,passed',
        ]);

        if ($request->hasFile('media')) {
            $validatedData['media'] = $request->file('media')->store('event-images', 'public');
        }

        UpcomingEvents::create($validatedData);

        return redirect()->route('Events')->with('success', 'Event created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(UpcomingEvents $upcomingEvents)
    {
         return view('Events.show', compact('upcomingEvent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UpcomingEvents $upcomingEvents)
    {
         return view('Events.edit', compact('upcomingEvent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UpcomingEvents $upcomingEvents)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'media' => 'nullable|image',
            'status' => 'required|in:upcoming,ongoing,passed',
        ]);

        if ($request->hasFile('media')) {
            $validatedData['media'] = $request->file('media')->store('event-images', 'public');
        }

        $upcomingEvents->update($validatedData);

        return redirect()->route('Events')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UpcomingEvents $upcomingEvents)
    {
         $upcomingEvents->delete();
        return redirect()->route('Events')->with('success', 'Event deleted successfully.');
    }

    
}
