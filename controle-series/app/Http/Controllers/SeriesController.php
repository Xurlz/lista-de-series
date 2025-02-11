<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller {

    function index()
    {
        $series = [
            'Lupin',
            'Senna',
            'Kobra Kai'
        ];

        return view('series.index',compact('series'));

    }

    function create()
    {
        return view('series.create');
    }

}
