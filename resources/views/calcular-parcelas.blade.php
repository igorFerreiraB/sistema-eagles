@extends('layouts.navigation')

@section('title', 'Eagles Despachante')

@section('content_header')
    <h1>Eagles Despachante</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Calcular Parcelas</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.calcular-parcelas.post') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="valor_multa">Valor da Multa (mínimo R$ 50,00):</label>
                            <input type="number" step="0.01" name="valor_multa" id="valor_multa" class="form-control" required min="50">
                            @error('valor_multa')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="numero_parcelas">Número de Parcelas (até 12x):</label>
                            <input type="number" name="numero_parcelas" id="numero_parcelas" class="form-control" min="1" max="12" required>
                            @error('numero_parcelas')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i> Consultar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(isset($parcelas))
        <div class="card mt-4">
            <div class="card-header">
                <h3 class="card-title">Resultado do Cálculo</h3>
            </div>
            <div class="card-header">
                <li class="list-group-item">
                    Total: R$ {{ number_format($valorTotal, 2, ',', '.') }}
                </li>
            </div>
            <div class="card-body">
                <p><strong>Valor da Multa:</strong> R$ {{ number_format($valorMulta, 2, ',', '.') }}</p>
                <p><strong>Número de Parcelas:</strong> {{ $numeroParcelas }}x</p>
                <p><strong>Comissão:</strong> 12%</p>
                <h4>Parcelas:</h4>
                <ul class="list-group">
                    @foreach($parcelas as $parcela)
                        <li class="list-group-item">
                            Parcela {{ $parcela['numero'] }}: R$ {{ $parcela['valor'] }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <form action="{{ route('gerar.pdf') }}" method="POST" target="_blank">
                @csrf
                <input type="hidden" name="valor_multa" value="{{ $valorMulta }}">
                <input type="hidden" name="numero_parcelas" value="{{ $numeroParcelas }}">
                <input type="hidden" name="parcelas" value="{{ json_encode($parcelas) }}">
                <input type="hidden" name="valor_total" value="{{ $valorTotal }}">

                <button type="submit" class="btn btn-success mt-3">
                    <i class="fas fa-file-pdf"></i> Baixar PDF
                </button>
            </form>
        </div>
    @endif
@stop
