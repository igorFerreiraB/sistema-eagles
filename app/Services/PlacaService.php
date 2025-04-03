<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PlacaService
{
    protected $baseUrl;
    protected $token;

    public function __construct()
    {
        $this->baseUrl = config('services.placas.url');
        $this->token = config('services.placas.token');
    }

    public function consultarPlaca($placa)
    {
        try {
            $url = "{$this->baseUrl}{$placa}/{$this->token}";
            Log::debug("Consultando API de placas: {$url}");

            $response = Http::timeout(30)->get($url);

            Log::debug("Resposta da API: " . $response->status());
            Log::debug("Conteúdo da resposta: " . $response->body());

            if ($response->successful()) {
                return $response->json();
            }

            Log::error("Erro na consulta: " . $response->status());
            return null;

        } catch (\Exception $e) {
            Log::error("Exceção na consulta: " . $e->getMessage());
            return null;
        }
    }
}
