<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eagles Despachante</title>
    <link rel="icon" href="{{ asset('images/placa.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .btn-purple {
            background-color: #003366;
            color: #fff;
            transition: all 0.3s ease-in-out;
        }
        .btn-purple:hover {
            background-color: #003366;
            transform: scale(1.05);
        }
        .step-card {
            border-left: 4px solid #003366;
            transition: transform 0.3s ease;
        }
        .step-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/eagles.png') }}" alt="Eagles Despachante" style="width: 50px; height: auto;">
                <span class="ms-2">Eagles Despachante</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="{{ url('/quem-somos') }}" class="nav-link">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/como-funciona') }}" class="nav-link">Como Funciona</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/calcular-parcelas') }}" class="nav-link">Painel</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                            {{ __('Perfil') }}
                                        </a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-item" href="{{ route('logout') }}" 
                                               onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Sair') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Entrar</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">Registrar</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <header class="text-center py-5 mt-5 bg-light">
        <div class="container">
            <h1 class="display-4">Como Funciona</h1>
            <p class="lead">Soluções rápidas e seguras para regularização veicular</p>
        </div>
    </header>

    <section class="container py-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 p-3 step-card">
                    <div class="card-body text-center">
                        <div class="bg-purple text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-user-plus fa-lg"></i>
                        </div>
                        <h3 class="h4">1. Cadastro Gratuito</h3>
                        <p>Crie sua conta na plataforma Eagles de forma rápida e totalmente gratuita. Basta informar alguns dados básicos e validar seu e-mail.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 p-3 step-card">
                    <div class="card-body text-center">
                        <div class="bg-purple text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-car fa-lg"></i>
                        </div>
                        <h3 class="h4">2. Consulta Veicular</h3>
                        <p>Após o login, acesse a área de consultas e informe a placa do veículo. Obtenha informações detalhadas sobre multas, licenciamento e débitos.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 p-3 step-card">
                    <div class="card-body text-center">
                        <div class="bg-purple text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-money-bill-wave fa-lg"></i>
                        </div>
                        <h3 class="h4">3. Parcelamento</h3>
                        <p>Selecione as multas que deseja parcelar, escolha o número de parcelas e finalize o processo. Nós cuidamos de todo o trâmite com o Detran.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Benefícios da Nossa Plataforma</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent border-start-0 border-end-0">
                            <i class="fas fa-check-circle text-purple me-2"></i> Acesso 100% online e seguro
                        </li>
                        <li class="list-group-item bg-transparent border-start-0 border-end-0">
                            <i class="fas fa-check-circle text-purple me-2"></i> Consultas veiculares em tempo real
                        </li>
                        <li class="list-group-item bg-transparent border-start-0 border-end-0">
                            <i class="fas fa-check-circle text-purple me-2"></i> Parcelamento em até 12x
                        </li>
                        <li class="list-group-item bg-transparent border-start-0 border-end-0">
                            <i class="fas fa-check-circle text-purple me-2"></i> Notificações sobre vencimentos
                        </li>
                        <li class="list-group-item bg-transparent border-start-0 border-end-0">
                            <i class="fas fa-check-circle text-purple me-2"></i> Histórico de consultas e parcelamentos
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="card border-0 shadow">
                        <div class="card-body p-4 text-center">
                            <h3 class="h4 mb-4">Pronto para começar?</h3>
                            <p>Registre-se agora e tenha acesso a todas as funcionalidades da nossa plataforma sem nenhum custo.</p>
                            <a href="{{ route('register') }}" class="btn btn-purple btn-lg mt-3 px-4">
                                <i class="fas fa-user-plus me-2"></i>Criar Conta Gratuita
                            </a>
                            <p class="small mt-3">Já tem uma conta? <a href="{{ route('login') }}">Faça login aqui</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>