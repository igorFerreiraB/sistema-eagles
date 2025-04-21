@extends('layouts.layout')

@section('title', 'Como Funciona - Eagles Despachante')
@section('description', 'Descubra como a plataforma Eagles Despachante simplifica a regularização veicular com consultas gratuitas e parcelamento de multas online')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container text-center">
            <h1 class="hero-title">Como Funciona</h1>
            <p class="hero-subtitle">Descubra como nossa plataforma simplifica a regularização veicular em poucos passos</p>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Passo a Passo</h2>
                <p class="text-muted">Tudo que você precisa fazer para regularizar seu veículo</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="card-custom text-center">
                        <div class="card-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h3 class="card-title">1. Cadastro Gratuito</h3>
                        <p class="card-text">Crie sua conta em menos de 2 minutos. Basta informar e-mail, CPF e criar uma senha segura. Não cobramos nada pelo cadastro.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-custom text-center">
                        <div class="card-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h3 class="card-title">2. Consulta Veicular</h3>
                        <p class="card-text">Na sua área logada, faça consultas gratuitas por placa e veja todos os débitos do veículo, incluindo multas e licenciamento.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-custom text-center">
                        <div class="card-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h3 class="card-title">3. Parcelamento</h3>
                        <p class="card-text">Selecione os débitos que deseja parcelar, escolha em quantas vezes (até 12x) e finalize. Nós cuidamos de todo o processo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Benefícios</h2>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                            <div>
                                <h4 class="h5 mb-1">Consulta veicular gratuita e ilimitada</h4>
                                <p class="mb-0 text-muted">Acesse quantas vezes precisar sem custo adicional.</p>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                            <div>
                                <h4 class="h5 mb-1">Parcelamento em até 12x</h4>
                                <p class="mb-0 text-muted">Condições especiais para facilitar seu pagamento.</p>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                            <div>
                                <h4 class="h5 mb-1">Processo 100% online</h4>
                                <p class="mb-0 text-muted">Resolva tudo sem sair de casa, de qualquer dispositivo.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="card-custom p-4">
                        <div class="text-center mb-4">
                            <h3 class="h2">Pronto para começar?</h3>
                            <p class="text-muted">Cadastre-se agora e tenha acesso a todos os serviços de forma rápida e segura.</p>
                        </div>
                        <div class="d-grid gap-3">
                            <a href="{{ route('register') }}" class="btn btn-primary btn-lg">
                                <i class="fas fa-user-plus me-2"></i>Criar Minha Conta
                            </a>
                            <p class="text-center mb-0">Já é cadastrado? <a href="{{ route('login') }}" class="text-primary fw-bold">Faça login aqui</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
