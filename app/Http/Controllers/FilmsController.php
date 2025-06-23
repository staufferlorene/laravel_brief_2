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

    public function store(Request $request)
    {
        Films::create($request->all());
        return redirect()->route('films.index');
    }

    public function destroy(Films $film)
    {
        $film->delete();
        return redirect()->route('films.index');
    }

    public function edit(Films $film)
    {
        return view('films.edit', compact('film'));
    }

    public function update(Request $request, Films $film)
    {
        $film->update($request->all());
        return redirect()->route('films.index');
    }

    public function noteAsc()
    {
        $films = Films::query()->orderBy('note', 'asc')->get();
        return view('films.index', compact('films'));
    }

    public function noteDesc()
    {
        $films = Films::query()->orderBy('note', 'desc')->get();
        return view('films.index', compact('films'));
    }

    public function dateAsc()
    {
        $films = Films::query()->orderBy('date', 'asc')->get();
        return view('films.index', compact('films'));
    }

    public function dateDesc()
    {
        $films = Films::query()->orderBy('date', 'desc')->get();
        return view('films.index', compact('films'));
    }

    public function meilleureNote()
    {
        $films = Films::query()->where('note', '>=', '8')->get();
        return view('films.index', compact('films'));
    }

    public function sortieRecente()
    {
        $films = Films::query()->where('date', '>=', 'DATE_SUB(NOW(), INTERVAL 3 MONTH)')->get();
        return view('films.index', compact('films'));
    }
}
