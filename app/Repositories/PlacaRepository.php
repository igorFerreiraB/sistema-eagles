<?php

namespace App\Repositories;

use App\Models\PlacaCache;

class PlacaRepository
{
    public function criar(string $placa, string|array $dados, ?int $userId = null): PlacaCache
    {
        return PlacaCache::create([
            'placa' => $placa,
            'dados' => $dados,
            'user_id' => $userId,
        ]);
    }
}
