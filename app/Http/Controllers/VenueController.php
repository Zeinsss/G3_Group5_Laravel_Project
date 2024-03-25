<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use App\Models\Event;
use App\Http\Requests\StoreVenueRequest;
use App\Http\Requests\UpdateVenueRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('venues.index', ['venues' => Venue::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event = Event::all();
        return view('venues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'capacity' => 'required|numeric',
            "is_available" => "required|boolean",
            "rental_fee" => "required|numeric",
            "available_date" => "required|date",
            'notes' => 'nullable|string'
        ]);
        
        $newVenue = Venue::create($data);
        
        return redirect()->route('venues.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venue $venue)
    {
        return view('venues.show', ['venue' => $venue]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venue $venue)
    {
        return view('venues.edit', ['venue' => $venue]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venue $venue)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'capacity' => 'required|numeric',
            "is_available" => "required|boolean",
            "rental_fee" => "required|numeric",
            "available_date" => "required|date",
            'notes' => 'nullable|string'
        ]);
        
        $venue->update($data);
        
        return redirect()->route('venues.index')->with('success', 'Venue updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venue $venue)
    {
        $venue->delete();
        
        return redirect()->route('venues.index')->with('success', 'Venue deleted successfully');
    }
}
