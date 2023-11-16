<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            'How I met your Mother',
            'One Piece',
            'Desencanto',
            'Gambito da Rainha'
        ];
        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        echo $html;
    }
}

