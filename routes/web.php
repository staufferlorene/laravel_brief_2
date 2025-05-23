<?php

use App\Models\Films;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('films', FilmsController::class);

Route::get('/films', function (){

    $model = new Films();
    $films = $model->all();

    return view('films.index', compact('films'));
})->name('films.index');
