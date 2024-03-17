<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/feed', [MainController::class, 'feed']);
Route::get('/profile', [MainController::class, 'profile']);

// Route::get('/', function () {
//     return view('welcome');
//     // return "<h1>Welcome to the new project</h1>";
// });
