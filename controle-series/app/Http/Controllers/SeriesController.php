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

        $html = '<ul>';

        foreach ($series as $serie)
        {
            $html .= "<li>$serie</li>";
        }

        $html .= '</ul>';

        return $html;
    }

}
