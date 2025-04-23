<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ParcelaController extends Controller
{
    public function index()
    {
        return view('calcular-parcelas');
    }
    public function gerarPDF(Request $request)
    {
        $data = [
            'valorMulta' => (float) $request->input('valor_multa'),
            'numeroParcelas' => (int) $request->input('numero_parcelas'),
            'parcelas' => json_decode($request->input('parcelas'), true),
            'valorTotal' => (float) $request->input('valor_total'),
        ];

        $pdf = PDF::loadView('pdf.gerar-pdf', $data);
        return $pdf->download('parcelamento-eagles-despachante.pdf');
    }

    public function calcular(Request $request)
    {
        $request->validate([
            'valor_multa' => 'required|numeric|min:50',
            'numero_parcelas' => 'required|integer|min:1|max:12',
        ]);

        $valorMulta = $request->input('valor_multa');
        $numeroParcelas = $request->input('numero_parcelas');
        $comissao = 0.12;

        $valorTotal = $valorMulta * (1 + $comissao);
        $valorParcela = $valorTotal / $numeroParcelas;

        $parcelas = [];
        for ($i = 1; $i <= $numeroParcelas; $i++) {
            $parcelas[] = [
                'numero' => $i,
                'valor' => number_format($valorParcela, 2, ',', '.'),
            ];
        }

        return view('calcular-parcelas', compact('parcelas', 'valorMulta', 'numeroParcelas', 'valorTotal'));
    }
}
