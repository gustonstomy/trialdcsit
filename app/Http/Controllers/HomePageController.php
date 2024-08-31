<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;
use App\Models\UpcomingEvents;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Fetch the single home page record
        $homePage = HomePage::first(); // This will return the first record or null if not found
        // return view('Home', compact('homePage')); // Pass data to the view
        // Fetch the home events, limiting to two events
        $homeEvents = UpcomingEvents::limit(2)->get(); // Fetch exactly two events

        // Pass both homePage and homeEvents data to the view
        return view('Home', compact('homePage', 'homeEvents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_home_page'); // Create a new view for the form
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'rank' => 'required|string|max:255',
            'subpage_name' => 'required|string|max:255',
            'content' => 'required|string',
            'media' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:public,private,reported',
        ]);
         // Handle file upload
        $mediaPath = $request->file('media')->store('media', 'public');

        // Check if a record already exists and update it or create a new one
        HomePage::updateOrCreate(
            [], // No conditions, this will create a new record if none exists
            [
                'rank' => $request->rank,
                'subpage_name' => $request->subpage_name,
                'content' => $request->content,
                'media' => $mediaPath,
                'status' => $request->status,
            ]
        );

        return redirect()->route('Home.index')->with('success', 'Home page updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(HomePage $homePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomePage $homePage)
    {
        return view('Home', compact('homePage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomePage $homePage)
    {
        // Similar validation and update logic as in store method
        $request->validate([
            'rank' => 'required|string|max:255',
            'subpage_name' => 'required|string|max:255',
            'content' => 'required|string',
            'media' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
            'status' => 'required|in:public,private,reported',
        ]);

        $data = [
            'rank' => $request->rank,
            'subpage_name' => $request->subpage_name,
            'content' => $request->content,
            'status' => $request->status,
        ];

        // If a new media file is uploaded, store it
        if ($request->hasFile('media')) {
            $data['media'] = $request->file('media')->store('media', 'public');
        }

        $homePage->update($data);

        return redirect()->route('Home.index')->with('success', 'Home page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomePage $homePage)
    {
         $homePage->delete();
        return redirect()->route('Home.index')->with('success', 'Home page deleted successfully.');
    }
}
