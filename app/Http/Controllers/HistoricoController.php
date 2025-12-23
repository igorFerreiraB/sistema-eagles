<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Services\PlacaService;
use App\Models\PlacaCache;

class HistoricoController extends Controller
{
    protected $placaService;

    public function __construct(PlacaService $placaService)
    {
        $this->placaService = $placaService;
    }

    public function index()
    {
        return view('placas.historico');
    }

    public function historico()
    {
        $userId = Auth::id();
        $historico = $this->placaService->obterHistoricoPorUsuario($userId);

        return view('placas.historico', compact('historico'));
    }

    public function show(int $id)
    {
        $consulta = PlacaCache::where('id', $id)
        ->where('user_id', Auth::id())
        ->firstOrFail();
        $resultado = $consulta->dados;

        return view('placas.historico-detalhe', compact('resultado'));
    }
}
