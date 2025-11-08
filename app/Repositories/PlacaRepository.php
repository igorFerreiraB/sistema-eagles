<?php

namespace App\Repositories;

use App\Models\PlacaConsulta;

class PlacaRepository
{
    public function criar(string $placa, string|array $json): PlacaConsulta
    {
        return PlacaConsulta::create([
            'placa'     => strtoupper($placa),
            'resultado' => $json,
        ]);
    }
}
