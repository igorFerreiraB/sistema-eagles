@extends('layouts.navigation')

@section('title', 'Consulta de Placa')

@section('content_header')
    <h1>Consulta de Placa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('dashboard.consulta-veicular.post') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="placa">Número da Placa</label>
                    <input type="text" name="placa" id="placa" 
                           class="form-control @error('placa') is-invalid @enderror" 
                           placeholder="Ex: ABC1D23" required>
                    @error('placa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i> Consultar
                </button>
            </form>
        </div>
    </div>
@stop