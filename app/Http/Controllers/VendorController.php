<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Http\Requests\StoreVendorRequest;
use App\Http\Requests\UpdateVendorRequest;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vendors.index', ['vendors' => Vendor::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
   
    $data = $request->validate([
        'name' => 'required|string',
        'services' => 'required|string',
        'pricing' => 'required|numeric',
        'notes' => 'nullable|string'
    ]);
        $newVendor = Vendor::create($data);
        return redirect()->route('vendors.index');
}


    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor)
    {
        return view('vendors.show', ['vendor' => $vendor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor)
    {
        return view('vendors.edit', ['vendor' => $vendor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $vendor)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'services' => 'required|string',
            'pricing' => 'required|numeric',
            'notes' => 'nullable|string'
        ]);
        $vendor->update($data);
        return redirect()->route('vendors.index')->with('success', 'Vendor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor)
    {
        $vendor->delete();
        return redirect()->route('vendors.index');
    }
}
