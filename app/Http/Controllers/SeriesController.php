<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listarSeries (Request $request)
    {
        $series = [
            "Greys Anatomy",
            "Lost",
            "Agents of Shield"
        ];

        $html = '<ul>';

        foreach($series as $serie)
        {
            $html .= '<li>'.
            $serie;
        }

        $html .= '</ul>';

        return $html;
    }
}