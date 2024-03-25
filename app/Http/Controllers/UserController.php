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
        
    }
    public function create()
    {
        
    }
    public function store(Request $request): RedirectResponse
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
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
    public function update(Request $request, User $user): RedirectResponse
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('users.index');
    }
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('users.index');
    }   
}
