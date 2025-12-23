@extends('layouts.navigation')

@section('title', 'Historico da Consulta de Placas')

@section('content_header')
    <h1>
        <i class="fas fa-history"></i> Histórico de Consultas
    </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if($historico->isEmpty())
                <p>Nenhum histórico de consultas encontrado.</p>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Placa</th>
                            <th>Marca/Modelo</th>
                            <th>Ano</th>
                            <th>Data da Consulta</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($historico as $consulta)
                            <tr>
                                <td>{{ $consulta->placa }}</td>
                                <td>{{ $consulta->dados['marcaModelo'] ?? '-' }}</td>
                                <td>{{ $consulta->dados['ano'] ?? - '-' }}</td>
                                <td>{{ $consulta->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('dashboard.placas.historico.show', $consulta->id) }}"
                                    class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i> Visualizar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@stop
