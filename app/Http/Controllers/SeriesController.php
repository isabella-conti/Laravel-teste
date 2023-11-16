<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function listarSeries()
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

        echo $html

    }
}
