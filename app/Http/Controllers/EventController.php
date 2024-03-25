<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\Vendor;
use App\Models\Venue;
use App\Models\Client;
use App\Http\Requests\StoreeventRequest;
use App\Http\Requests\UpdateeventRequest;
use Illuminate\Http\Request;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_vendor = Event::with('vendor')->get();
        $data_venue = Event::with('venue')->get();
        $data_client = Event::with('client')->get();
        return view('events.index', ['events' => Event::all(), 'vendors' => $data_vendor, 'venues' => $data_venue, 'clients' => $data_client]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('events.create', [
            'vendors' => Vendor::all(),
            'venues' => Venue::all(),
            'clients' => Client::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'description' => 'required|string',
            'client_id' => 'required|integer',
            'budget' => 'required|numeric',
            'status' => 'required|string',
            'vendor_id' => 'required|integer',
            'venue_id' => 'required|integer'
        ]);
        $newEvent = event::create($data);
        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(event $event)
    {
        
        return view('events.edit', ['event' => $event, 'vendors' => Vendor::all(), 'venues' => Venue::all(), 'clients' => Client::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, event $event)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'description' => 'required|string',
            'client_id' => 'required|integer',
            'budget' => 'required|numeric',
            'status' => 'required|string',
            'vendor_id' => 'required|integer',
            'venue_id' => 'required|integer'
        ]);
        $event->update($data);
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(event $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }
}
