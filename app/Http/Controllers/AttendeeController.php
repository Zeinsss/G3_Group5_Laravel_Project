<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Event;
use App\Models\User;
use App\Http\Requests\StoreAttendeeRequest;
use App\Http\Requests\UpdateAttendeeRequest;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_event = Attendee::with('event')->get();
        return view('attendees.index', ['attendees' => Attendee::all(), 'events' => $data_event]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendees.create', ['events' => Event::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required|in:admin,attendee',
            'register_status' => 'required',
            'attendance' => 'required',
            'event_id' => 'required|exists:events,id'
        ]);
        // Only admin or user can go to attendees.index and others beside them go to events.index
        $newAttendee = Attendee::create($data);
        if (auth()->user()->type == 'admin' || auth()->user()->type == 'user') {
            return redirect()->route('attendees.index');
        }
        else if (auth()->user()->type == 'guest'){
            return redirect()->route('events.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendee $attendee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendee $attendee)
    {
        return view('attendees.edit', ['attendee' => $attendee, 'events' => Event::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendee $attendee)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required|in:admin,attendee',
            'register_status' => 'required',
            'attendance' => 'required',
            'event_id' => 'required|exists:events,id'
        ]);
        $attendee->update($data);
        return redirect(route('attendees.index'))->with('success', 'Attendee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendee $attendee)
    {
        $attendee->delete();
        return redirect(route('attendees.index'));
    }
}
