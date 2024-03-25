<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Event;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('clients.index', ['clients' => Client::all()]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::all();
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'budgets' => 'required|numeric',
            'notes' => 'nullable|string'
        ]);

        $newClient = Client::create($data);

        return redirect()->route('clients.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'budgets' => 'required|numeric',
            'notes' => 'nullable|string'
        ]);

        $client->update($data);

        return redirect(route('clients.index'))->with('success', 'Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect(route('clients.index'))->with('success', 'Client deleted successfully');
    }
}
