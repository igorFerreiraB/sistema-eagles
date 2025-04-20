<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eagles Despachante</title>
    <meta name="description" content="Consultas veiculares e parcelamento de multas - Simplifique sua vida com os serviços da Eagles Despachante">

    <!-- Ícone -->
    <link rel="icon" href="{{ asset('images/placa.png') }}" type="image/x-icon">

    <!-- Pré-conexão para melhor performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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
            --light-gray: #f8f9fa;
            --white: #ffffff;
            --shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-gray);
            color: var(--text-gray);
            line-height: 1.6;
        }

        /* Navbar Styles */
        .navbar {
            transition: all 0.3s ease-in-out;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .navbar.scrolled {
            box-shadow: var(--shadow);
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: 700;
        }

        .navbar-brand img {
            width: 50px;
            height: auto;
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover img {
            transform: scale(1.05);
        }

        .nav-link {
            font-weight: 600;
            color: var(--text-gray);
            transition: color 0.3s ease;
            position: relative;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover,
        .nav-link:focus {
            color: var(--hover-blue);
        }

        .nav-link.active {
            color: var(--main-blue);
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 1rem;
            right: 1rem;
            height: 2px;
            background-color: var(--main-blue);
        }

        .page-header {
            padding: 6rem 0 4rem;
            background: linear-gradient(135deg, rgba(0, 33, 71, 0.05) 0%, rgba(255, 255, 255, 1) 100%);
            margin-bottom: 2rem;
        }

        .page-title {
            font-weight: 700;
            color: var(--main-blue);
            margin-bottom: 1rem;
            font-size: 2.5rem;
        }

        .page-subtitle {
            color: var(--text-gray);
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Content Styles */
        .services-section {
            padding: 4rem 0;
        }

        .section-title {
            color: var(--main-blue);
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 3rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--main-blue);
        }

        /* Cards Styles */
        .service-card {
            border: none;
            border-radius: 1rem;
            transition: all 0.3s ease;
            background-color: var(--white);
            height: 100%;
            padding: 2.5rem 2rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 33, 71, 0.1);
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--main-blue);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1);
        }

        .service-title {
            font-weight: 700;
            color: var(--main-blue);
            margin-bottom: 1rem;
        }

        .service-description {
            margin-bottom: 2rem;
            min-height: 60px;
        }

        /* Button Styles */
        .btn-primary {
            background-color: var(--main-blue);
            border-color: var(--main-blue);
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: var(--hover-blue);
            border-color: var(--hover-blue);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 33, 71, 0.2);
        }

        /* Footer Styles */
        .footer {
            background-color: var(--white);
            padding: 2rem 0;
            text-align: center;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            margin-top: 3rem;
        }

        .footer p {
            margin-bottom: 0;
            font-size: 0.9rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .page-header {
                padding: 5rem 0 3rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .page-subtitle {
                font-size: 1rem;
            }

            .services-section {
                padding: 2rem 0;
            }

            .service-card {
                padding: 2rem 1.5rem;
                margin-bottom: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/eagles.png') }}" alt="Eagles Despachante" class="me-2">
                <span>Eagles Despachante</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/quem-somos') }}">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/como-funciona') }}">Como Funciona</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">Painel</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Sair') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrar</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="page-header">
        <div class="container text-center">
            <h1 class="page-title">Consultas Veiculares e Parcelamento de Multas</h1>
            <p class="page-subtitle">Faça seu login na plataforma e tenha acesso a todos os nossos serviços com praticidade e segurança. Aproveite!</p>
        </div>
    </header>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Nossos Serviços</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-5">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h3 class="service-title">Consulta de Veículo</h3>
                        <p class="service-description">Confira todos os detalhes do seu veículo de forma rápida e segura, com informações atualizadas em tempo real.</p>
                        <a href="{{route('dashboard.consulta-veicular')}}" class="btn btn-primary">
                            Verificar Placa <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h3 class="service-title">Parcelamento de Multas</h3>
                        <p class="service-description">Calcule e simule suas parcelas em poucos cliques, com condições especiais e taxas reduzidas.</p>
                        <a href="{{ route('dashboard.calcular-parcelas') }}" class="btn btn-primary">
                            Simular Agora <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Eagles Despachante. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 20);
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>
