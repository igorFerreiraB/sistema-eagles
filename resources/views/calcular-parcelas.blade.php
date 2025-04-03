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
                            <label for="valor_multa">Valor da Multa:</label>
                            <input type="number" step="0.01" name="valor_multa" id="valor_multa" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="numero_parcelas">Número de Parcelas (até 12x):</label>
                            <input type="number" name="numero_parcelas" id="numero_parcelas" class="form-control" min="1" max="12" required>
                        </div>

                        <button type="submit" class="btn" style="background-color: #003366; color: white;">Calcular</button>
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
        </div>
    @endif
@stop
