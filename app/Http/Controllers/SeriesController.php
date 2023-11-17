<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'How I met your Mother',
            'One Piece',
            'Desencanto',
            'Gambito da Rainha'
        ];

        return view('listar-series')->with('series',$series);
    }
}

