<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', FilmsController::class);
