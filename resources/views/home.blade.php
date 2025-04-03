<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eagles Despachante</title>

    <link rel="icon" href="{{ asset('images/placa.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .btn-purple {
            background-color: #002147;
            border-color: #003366;
            color: white;
        }
        .btn-purple:hover {
            background-color: #003366;
            border-color: #003366;
        }
        .btn-outline-purple {
            border-color: #003366;
            color: #003366;
        }
        .btn-outline-purple:hover {
            background-color: #003366;
            color: white;
        }
        .btn-purple {
        background-color: #003366;
        color: #fff;
        transition: all 0.3s ease-in-out;
        }
        .btn-purple:hover {
            background-color: #003366;
            transform: scale(1.05);
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
                                <a href="{{ route('dashboard') }}" class="nav-link">Painel</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

    <header class="text-center py-5 mt-5">
        <h1>Consultas veículares e parcelamento de multas</h1>
        <p>Faça seu login na plataforma e tenha acesso a todos os nossos serviços. Aproveite!</p>
    </header>

    <section class="container text-center py-5">
        <div class="mb-5">
            <h2 class="fw-bold text-uppercase" style="color: #003366;">Nossos Serviços</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-car fa-3x" style="color: #003366;"></i>
                        </div>
                        <h5 class="card-title fw-bold w-100 text-center">Consulta de Veículo</h5>
                        <p class="card-text text-muted">Confira os detalhes do seu carro rapidamente.</p>
                        <a href="{{route('dashboard.consulta-veicular')}}" class="btn btn-purple fw-bold px-4 py-2 rounded-pill">Verificar Placa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-calculator fa-3x" style="color: #003366;"></i>
                        </div>
                        <h5 class="card-title fw-bold w-100 text-center">Parcelamento de Multas</h5>
                        <p class="card-text text-muted">Calcule e simule suas parcelas em poucos cliques.</p>
                        <a href="{{ route('dashboard.calcular-parcelas') }}" class="btn btn-purple fw-bold px-4 py-2 rounded-pill">Simular Agora</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>

</html>