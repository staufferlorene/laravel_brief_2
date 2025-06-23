<?php

use App\Models\Films;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('films', FilmsController::class);
