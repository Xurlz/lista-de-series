<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{
    public function listarSeries ()
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