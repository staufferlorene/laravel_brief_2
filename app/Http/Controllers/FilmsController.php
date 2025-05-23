<?php

namespace App\Http\Controllers;

use App\Models\Films;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    public function index()
    {
        $films = Films::all();
        return view('films.index', compact('films'));
    }
}
