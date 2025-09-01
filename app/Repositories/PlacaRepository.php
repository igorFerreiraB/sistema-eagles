<?php

namespace App\Repositories;

use App\Models\PlacaConsulta;

class PlacaRepository
{
    public function criar(string $placa, string|array $json, ?int $userId = null): PlacaConsulta
    {
        return PlacaConsulta::create([
            'user_id'   => $userId,
            'placa'     => strtoupper($placa),
            'resultado' => $json,
        ]);
    }
    
    public function listarDoUsuario(int $userId, int $perPage = 15)
    {
        return PlacaConsulta::query()
            ->where('user_id', $userId)
            ->latest()
            ->paginate($perPage);
    }
}
