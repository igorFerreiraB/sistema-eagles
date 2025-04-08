@extends('layouts.navigation')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Seu Histórico de Consultas</h3>
        </div>
        
        <div class="card-body">
            @if($consultas->isNotEmpty())
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Placa</th>
                                <th>Data/Hora</th>
                                <th>IP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($consultas as $consulta)
                            <tr>
                                <td>{{ $consulta->placa }}</td>
                                <td>{{ $consulta->created_at->format('d/m/Y H:i') }}</td>
                                <td>{{ $consulta->ip_address }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-3">
                    {{ $consultas->links() }}
                </div>
            @else
                <div class="alert alert-info">
                    Você ainda não realizou nenhuma consulta.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection