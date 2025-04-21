@extends('layouts.layout')

@section('title', 'Quem Somos - Eagles Despachante')
@section('description', 'Conheça a Eagles Despachante, sua solução para serviços veiculares com atendimento ágil e totalmente online.')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container text-center">
            <h1 class="hero-title">Quem Somos</h1>
            <p class="hero-subtitle">Somos um grupo de estudantes da área de tecnologia que decidiu desenvolver uma aplicação digital para a empresa Eagles Despachante.</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Nossa História</h2>
                    <p class="lead">A <strong>Eagles Despachante</strong> surgiu a partir de um projeto escolar, com o objetivo de modernizar os serviços veiculares.</p>
                    <p>Identificamos a necessidade de digitalização no setor e desenvolvemos uma plataforma que facilita o acesso dos clientes aos serviços oferecidos, com foco em praticidade e modernização.</p>
                    <p>Nosso objetivo é oferecer um sistema prático e seguro para o parcelamento de multas veiculares e consultas completas por meio da placa do veículo.</p>
                    <a href="{{ url('/como-funciona') }}" class="btn btn-primary mt-3">
                        Saiba como funciona <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="{{ asset('images/about-team.jpg') }}" alt="Nossa equipe" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Nossos Valores</h2>
                <p class="text-muted">Princípios que guiam nosso trabalho diário</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card-custom text-center">
                        <div class="card-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="card-title">Inovação</h3>
                        <p class="card-text">Buscamos constantemente novas soluções tecnológicas para melhorar a experiência do usuário.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-custom text-center">
                        <div class="card-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h3 class="card-title">Transparência</h3>
                        <p class="card-text">Todas as informações são claras e acessíveis, sem surpresas ou custos ocultos.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-custom text-center">
                        <div class="card-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="card-title">Eficiência</h3>
                        <p class="card-text">Processos otimizados que economizam seu tempo e evitam deslocamentos desnecessários.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
