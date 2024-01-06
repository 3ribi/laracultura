<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('index');});
Route::get('/about', function () { return view('about');});
Route::get('/contact', function () { return view('contact');});
Route::get('/members', function () { return view('members');});


Route::resource('activity', \App\Http\Controllers\ActivityController::class);
Route::resource('tasks', \App\Http\Controllers\TaskController::class);
Route::resource('users', \App\Http\Controllers\UsersController::class);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
