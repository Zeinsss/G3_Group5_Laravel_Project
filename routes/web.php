<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VenueController;
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

Route::get('/event', function(){
    return view('back-end.event.create');
});
Route::get('/home', function(){
    return view('front-end.layouts.app');
})->name('home');
Route::get('/venue', [VenueController::class, 'index'])->name('venue.index');
Route::get('/venue/create', [VenueController::class, 'create'])->name('venue.create');
Route::post('/venue', [VenueController::class, 'store'])->name('venue.store');
Route::get('/venue/{venue}', [VenueController::class, 'show'])->name('venue.show');
