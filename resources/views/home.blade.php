@extends('layouts.layout')

@section('title', 'Home')
@section('description', 'Faça seu login na plataforma e tenha acesso a todos os nossos serviços com praticidade e segurança. Aproveite!')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container text-center">
            <h1 class="hero-title">Consultas Veiculares e Parcelamento de Multas</h1>
            <p class="hero-subtitle">Simplifique sua vida com os serviços digitais da Eagles Despachante. Tudo online, rápido e seguro.</p>
            <div class="d-flex gap-3 justify-content-center">
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">
                        Acessar Painel <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                        Acessar Conta <i class="fas fa-sign-in-alt ms-2"></i>
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg">
                        Criar Conta <i class="fas fa-user-plus ms-2"></i>
                    </a>
                @endauth
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Nossos Serviços</h2>
                <p class="text-muted">Tudo que você precisa para regularizar seu veículo em um só lugar</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="card-custom text-center">
                        <div class="card-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h3 class="card-title">Consulta de Veículo</h3>
                        <p class="card-text">Confira todos os detalhes do seu veículo de forma rápida e segura, com informações atualizadas em tempo real.</p>
                        <a href="{{ route('dashboard.consulta-veicular') }}" class="btn btn-primary">
                            Verificar Placa <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="card-custom text-center">
                        <div class="card-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h3 class="card-title">Parcelamento de Multas</h3>
                        <p class="card-text">Calcule e simule suas parcelas em poucos cliques, com condições especiais e taxas reduzidas.</p>
                        <a href="{{ route('dashboard.calcular-parcelas') }}" class="btn btn-primary">
                            Simular Agora <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Por que escolher a Eagles?</h2>
                    <div class="row g-3 mt-4">
                        <div class="col-md-6">
                            <div class="feature-box">
                                <i class="fas fa-bolt text-primary mb-3"></i>
                                <h4>Processo Rápido</h4>
                                <p class="mb-0">Tudo resolvido em poucos minutos, sem sair de casa.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box">
                                <i class="fas fa-lock text-primary mb-3"></i>
                                <h4>Segurança Garantida</h4>
                                <p class="mb-0">Seus dados protegidos com tecnologia avançada.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box">
                                <i class="fas fa-headset text-primary mb-3"></i>
                                <h4>Suporte Especializado</h4>
                                <p class="mb-0">Equipe pronta para te ajudar quando precisar.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box">
                                <i class="fas fa-money-bill-wave text-primary mb-3"></i>
                                <h4>Condições Especiais</h4>
                                <p class="mb-0">Parcelamento em até 12x com taxas reduzidas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
