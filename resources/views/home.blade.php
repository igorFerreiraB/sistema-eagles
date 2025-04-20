<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eagles Despachante</title>

    <!-- Ícone -->
    <link rel="icon" href="{{ asset('images/placa.png') }}" type="image/x-icon">

    <!-- Fonts e Estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --main-blue: #002147;
            --hover-blue: #003366;
            --text-gray: #6c757d;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-brand span {
            font-weight: 700;
            font-size: 1.2rem;
        }

        .nav-link:hover {
            color: var(--hover-blue);
        }

        .btn-purple {
            background-color: var(--main-blue);
            color: #fff;
            border: none;
            transition: all 0.3s ease-in-out;
        }

        .btn-purple:hover {
            background-color: var(--hover-blue);
            transform: scale(1.05);
        }

        .section-title {
            color: var(--main-blue);
            font-weight: 700;
            text-transform: uppercase;
        }

        .card {
            border: none;
            border-radius: 1rem;
            transition: all 0.3s ease-in-out;
            background-color: #fff;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 33, 71, 0.1);
        }

        .icon-style {
            color: var(--main-blue);
        }

        header h1 {
            font-weight: 700;
            color: var(--main-blue);
        }

        header p {
            color: var(--text-gray);
            font-size: 1.1rem;
        }

        footer {
            background-color: #fff;
            padding: 1rem 0;
            text-align: center;
            font-size: 0.9rem;
            color: var(--text-gray);
            border-top: 1px solid #e0e0e0;
        }

        .navbar {
            transition: box-shadow 0.3s ease-in-out;
        }

        .navbar.scrolled {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
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
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
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
            <h2 class="section-title">Nossos Serviços</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm p-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-car fa-3x icon-style"></i>
                        </div>
                        <h5 class="fw-bold">Consulta de Veículo</h5>
                        <p class="text-muted">Confira os detalhes do seu carro rapidamente.</p>
                        <a href="{{route('dashboard.consulta-veicular')}}" class="btn btn-purple px-4 py-2 rounded-pill fw-semibold">Verificar Placa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm p-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-calculator fa-3x icon-style"></i>
                        </div>
                        <h5 class="fw-bold">Parcelamento de Multas</h5>
                        <p class="text-muted">Calcule e simule suas parcelas em poucos cliques.</p>
                        <a href="{{ route('dashboard.calcular-parcelas') }}" class="btn btn-purple px-4 py-2 rounded-pill fw-semibold">Simular Agora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Eagles Despachante. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script>
        // Adiciona sombra à navbar ao rolar a página
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 20) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
