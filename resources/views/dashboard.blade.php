@extends('layouts.navigation')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg mt-4">
                <div class="card-body text-center">
                    <h1 class="display-5 fw-bold text-primary">
                        <i class="fas fa-tachometer-alt"></i> Bem-vindo, {{ Auth::user()->name }}!
                    </h1>
                    <p class="lead text-muted">Gerencie suas operações de forma simples e eficiente.</p>
                    <a href="{{ route('dashboard.calcular-parcelas') }}" class="btn btn-primary mt-3">
                        <i class="fas fa-calculator"></i> Calcular Parcelas
                    </a>
                    <a href="{{ route('dashboard.consulta-veicular') }}" class="btn btn-primary mt-3">
                        <i class="fas fa-car"></i> Calcular Parcelas
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
