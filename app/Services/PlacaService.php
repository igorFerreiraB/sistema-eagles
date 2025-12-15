<?php

namespace App\Services;

use App\Models\PlacaCache;
use App\Repositories\PlacaRepository;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PlacaService
{
    protected $baseUrl;
    protected $token;
    protected PlacaRepository $repository;

    public function __construct(PlacaRepository $repository)
    {
        $this->baseUrl = config('services.placas.url');
        $this->token = config('services.placas.token');
        $this->repository = $repository;
    }

    public function consultarPlaca($placa)
    {
        $cache = PlacaCache::where('placa', $placa)->first();

        if ($cache) {
            Log::debug("Dados encontrados no banco para a placa: {$placa}");
            return $cache->dados;
        }

        $url = "{$this->baseUrl}{$placa}/{$this->token}";
        Log::debug("Consultando API de placas: {$url}");

        $response = Http::timeout(30)->get($url);

        Log::debug("Resposta da API: " . $response->status());
        Log::debug("Conteúdo da resposta: " . $response->body());

        if ($response->successful()) {
            $dados = $response->json();

            $this->repository->criar($placa, $dados);

            Log::debug("Dados armazenados no banco para a placa: {$placa}");

            return $dados;
        }

        Log::error("Erro na consulta: " . $response->status());
        return null;
    }
}
