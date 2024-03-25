<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});

Route::get('/tasks/create', [TaskController::class, 'create']);{
    return view('tasks.create');
};
Route::get('/tasks', [TaskController::class, 'index']);{
    return view('tasks.index');
};
Route::get('/clients/create', [ClientController::class, 'create']);{
    return view('clients.create');
};
Route::get('/clients', [ClientController::class, 'index']);{
    return view('clients.index');
};
Route::get('/events/create', [EventController::class, 'create']);{
    return view('events.create');
};
Route::get('/events', [EventController::class, 'index']);{
    return view('events.index');
};
Route::get('/users/create', [UserController::class, 'create']);{
    return view('users.create');
};
Route::get('/users', [UserController::class, 'index']);{
    return view('users.index');
};
Route::get('/users/login', [UserController::class, 'login']);{
    return view('users.login');
};
Route::get('/users/register', [UserController::class, 'register']);{
    return view('users.register');
};
Route::get('/users/profile', [UserController::class, 'profile']);{
    return view('users.profile');
};
Route::get('/users/edit', [UserController::class, 'edit']);{
    return view('users.edit');
};
