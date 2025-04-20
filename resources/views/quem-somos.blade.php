<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quem Somos - Eagles Despachante</title>
    <meta name="description" content="Conheça a Eagles Despachante, sua solução para serviços veiculares com atendimento ágil e totalmente online.">

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

        /* Header Styles */
        .page-header {
            padding: 6rem 0 3rem;
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
        .about-section {
            padding: 4rem 0;
        }

        .section-title {
            color: var(--main-blue);
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 2rem;
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

        .about-text {
            font-size: 1.1rem;
            max-width: 800px;
            margin: 0 auto 3rem;
        }

        /* Cards Styles */
        .feature-card {
            border: none;
            border-radius: 1rem;
            transition: all 0.3s ease;
            background-color: var(--white);
            height: 100%;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 33, 71, 0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--main-blue);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1);
        }

        .feature-title {
            font-weight: 700;
            color: var(--main-blue);
            margin-bottom: 1rem;
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
                padding: 5rem 0 2rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .page-subtitle {
                font-size: 1rem;
            }

            .about-section {
                padding: 2rem 0;
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
                        <a class="nav-link active" href="{{ url('/quem-somos') }}">Quem Somos</a>
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
                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                            {{ __('Perfil') }}
                                        </a>
                                    </li>
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
            <h1 class="page-title">Quem Somos</h1>
            <p class="page-subtitle">Somos um grupo de estudantes da área de tecnologia que decidiu desenvolver uma aplicação digital para a empresa Eagles Despachante. Nosso objetivo é oferecer um sistema prático e seguro para o parcelamento de multas veiculares. Como benefício adicional, também disponibilizamos consultas veiculares completas por meio da placa do veículo.</p>
        </div>
    </header>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Nossa História</h2>
                <p class="about-text">
                    A <strong>Eagles Despachante</strong> surgiu a partir de um projeto escolar, no qual tínhamos como objetivo identificar necessidades em empresas reais e propor soluções tecnológicas. Ao analisarmos a Eagles, percebemos a carência de uma plataforma digital que facilitasse o acesso dos clientes aos serviços oferecidos. Assim, desenvolvemos um site com foco em praticidade, modernização e ampliação do alcance da empresa.
                </p>
            </div>

            <div class="row g-4 justify-content-center mb-5">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <h3 class="feature-title">Facilidade na Regularização</h3>
                        <p>Nossa plataforma foi criada para facilitar a vida de quem precisa se regularizar sem complicações. Processos simples e intuitivos para resolver seus débitos veiculares sem passar aperto.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3 class="feature-title">Consulta Veicular Gratuita</h3>
                        <p>Oferecemos consulta veicular gratuita e completa, permitindo que você acesse todas as informações do seu veículo de forma rápida e sem custos.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="feature-title">Agilidade e Praticidade</h3>
                        <p>Tudo que você precisa em um só lugar, com processos otimizados que economizam seu tempo e evitam deslocamentos desnecessários.</p>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ url('/como-funciona') }}" class="btn btn-primary">
                    Saiba como funciona <i class="fas fa-arrow-right ms-2"></i>
                </a>
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
