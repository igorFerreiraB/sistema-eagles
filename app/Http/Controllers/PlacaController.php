<?php

namespace App\Http\Controllers;

use App\Services\PlacaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PlacaController extends Controller
{
    protected $placaService;

    public function __construct(PlacaService $placaService)
    {
        $this->placaService = $placaService;
    }

    public function index()
    {
        return view('placas.consulta');
    }

    public function consultar(Request $request)
    {
        $request->validate([
            'placa' => 'required|string|max:8'
        ]);

        $placa = strtoupper($request->input('placa'));
        Log::debug("Iniciando consulta para placa: {$placa}");

        $resultado = $this->placaService->consultarPlaca($placa);

        if (!$resultado) {
            Log::error("Consulta retornou nulo para placa: {$placa}");
            return back()
                ->withInput()
                ->with('error', 'Placa não encontrada ou erro na consulta. Verifique os logs.');
        }

        if (isset($resultado['fipe']['dados'])) {
            foreach ($resultado['fipe']['dados'] as &$fipe) {
                $fipe['texto_valor'] = 'R$ ' . number_format(floatval($fipe['texto_valor']), 2, ',', '.');
            }
        }

        Log::debug("Consulta bem-sucedida para placa: {$placa}");
        return view('placas.resultado', compact('resultado'));
    }
}
