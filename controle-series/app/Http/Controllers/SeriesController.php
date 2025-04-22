<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('name')->get();

        return view('series.index', compact('series'));

    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serieName = $request->input('name');
        $serie = new Serie();
        $serie->name = $serieName;
        $serie->save();
        return redirect(to: '/series');
    }

}
