<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/terms', function () {
    return view('terms');
});

// Route::get('/', function () {
//     return view('welcome');
//     // return "<h1>Welcome to the new project</h1>";
// });
