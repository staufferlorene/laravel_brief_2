<?php

use App\Models\Films;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('films', FilmsController::class)->except(['show']);

Route::get('/films/noteAsc', [FilmsController::class, 'noteAsc'])->name('films.noteAsc');
Route::get('/films/noteDesc', [FilmsController::class, 'noteDesc'])->name('films.noteDesc');

Route::get('/films/dateAsc', [FilmsController::class, 'dateAsc'])->name('films.dateAsc');
Route::get('/films/dateDesc', [FilmsController::class, 'dateDesc'])->name('films.dateDesc');

Route::get('/films/meilleureNote', [FilmsController::class, 'meilleureNote'])->name('films.meilleureNote');

Route::get('/films/sortieRecente', [FilmsController::class, 'sortieRecente'])->name('films.sortieRecente');
