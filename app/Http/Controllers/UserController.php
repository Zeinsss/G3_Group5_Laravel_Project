<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', ['users' => User::all()]);
    }
    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'type' => 'required'
        ]);
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('users.index');
    }
    public function show(User $user): View
    {
        return view('users.show', ['user' => $user]);
    }
    public function edit(User $user): View
    {
        return view('users.edit', ['user' => $user]);
    }
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'type' => 'required'
        ]);
        if ($data['password'] != $user->password) {
            $data['password'] = bcrypt($data['password']);
        }
        $user->update($data);
        return redirect()->route('users.index');
    }
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('users.index');
    }   
    
}
