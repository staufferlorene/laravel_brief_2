<?php

namespace App\Http\Controllers;

use App\Models\Films;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmsController extends Controller
{
    public function index()
    {
        $films = Films::all();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        return view('films.create');
    }

    public function store(Request $request){
        Films::create($request->all());

     /*       DB::table('films')->insert([
            'titre' => $request->titre,
            'date' => $request->date,
            'note' => $request->note,
            'commentaire' => $request->commentaire,
        ]);*/

        return redirect()->route('films.index')->with('succès', 'Film crée avec succès.');
    }
}
