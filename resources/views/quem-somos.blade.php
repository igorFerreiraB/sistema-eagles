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
        .feature-card {
            border-left: 4px solid #003366;
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .bg-purple-light {
            background-color: #f8f1ff;
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
            <h1 class="display-4">Quem Somos</h1>
            <p class="lead">Conheça a Eagles e nossa missão de simplificar a vida dos motoristas</p>
        </div>
    </header>

    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mb-4">Sobre a Eagles Despachante</h2>
                <p class="lead">Somos a <strong>Eagles</strong>, uma empresa especializada no parcelamento de multas do Detran e na oferta de consultas veiculares detalhadas.</p>
                <p>Nosso objetivo é facilitar a vida dos motoristas, oferecendo soluções rápidas e seguras para a regularização de débitos veiculares. Trabalhamos com total transparência e praticidade, permitindo que você consulte informações do seu veículo e parcele suas multas diretamente pela nossa plataforma.</p>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Nossos Diferenciais</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 p-3 feature-card">
                        <div class="card-body text-center">
                            <div class="bg-purple text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-shield-alt fa-lg"></i>
                            </div>
                            <h3 class="h4">Segurança</h3>
                            <p>Todos os dados e transações são protegidos com os mais altos padrões de segurança da informação.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 p-3 feature-card">
                        <div class="card-body text-center">
                            <div class="bg-purple text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-bolt fa-lg"></i>
                            </div>
                            <h3 class="h4">Agilidade</h3>
                            <p>Processos rápidos e eficientes, com resultados em tempo real para suas consultas veiculares.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 p-3 feature-card">
                        <div class="card-body text-center">
                            <div class="bg-purple text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-hand-holding-usd fa-lg"></i>
                            </div>
                            <h3 class="h4">Transparência</h3>
                            <p>Sem taxas escondidas ou custos adicionais. Tudo é mostrado claramente antes de você confirmar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Nossa Missão</h2>
                    <p>Transformar a experiência de regularização veicular, tornando-a simples, acessível e transparente para todos os motoristas.</p>
                    <p>Acreditamos que a tecnologia pode simplificar processos burocráticos, economizando tempo e dinheiro dos nossos clientes.</p>
                    <a href="{{ url('/como-funciona') }}" class="btn btn-purple mt-3">
                        <i class="fas fa-play-circle me-2"></i>Como Funciona
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>