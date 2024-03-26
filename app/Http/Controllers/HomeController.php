<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Task;
use App\Models\Vendor;
use App\Models\Venue;
use App\Models\Client;
use App\Models\Attendee;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() : View
    {
        return view('home');
    }
    public function adminhome() : View  
    {
        return view('adminhome');
    }

    public function dashboard () 
    {
        $users = User::all();
        $events = Event::all();
        $tasks = Task::all();
        $vendors = Vendor::all();
        $venues = Venue::all();
        $clients = Client::all();
        $attendees = Attendee::all();
        
        return view('backapp.dashboard', ['users' => $users, 'events' => $events, 'tasks' => $tasks, 'vendors' => $vendors, 'venues' => $venues, 'clients' => $clients, 'attendees' => $attendees]);
    }
}
