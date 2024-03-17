<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
// Route::get('/', function () {
//     return view('welcome');
//     // return "<h1>Welcome to the new project</h1>";
// });
