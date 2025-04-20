<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Como Funciona - Eagles Despachante</title>
    <meta name="description" content="Descubra como a plataforma Eagles Despachante simplifica a regularização veicular com consultas gratuitas e parcelamento de multas online">

    <link rel="icon" href="{{ asset('images/placa.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
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

        .how-it-works-section {
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

        .step-card {
            border: none;
            border-radius: 1rem;
            transition: all 0.3s ease;
            background-color: var(--white);
            height: 100%;
            padding: 2.5rem 2rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .step-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 33, 71, 0.1);
        }

        .step-icon {
            font-size: 2.5rem;
            color: var(--main-blue);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }

        .step-card:hover .step-icon {
            transform: scale(1.1);
        }

        .step-title {
            font-weight: 700;
            color: var(--main-blue);
            margin-bottom: 1rem;
        }

        .benefits-list {
            list-style: none;
            padding-left: 0;
        }

        .benefits-list li {
            margin-bottom: 1rem;
            padding-left: 2rem;
            position: relative;
        }

        .benefits-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: var(--main-blue);
            position: absolute;
            left: 0;
        }

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

            .how-it-works-section {
                padding: 2rem 0;
            }

            .step-card {
                margin-bottom: 1.5rem;
            }
        }
    </style>
</head>

<body>
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
                        <a class="nav-link active" href="{{ url('/como-funciona') }}">Como Funciona</a>
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

    <header class="page-header">
        <div class="container text-center">
            <h1 class="page-title">Como Funciona</h1>
            <p class="page-subtitle">Descubra como nossa plataforma simplifica a regularização veicular em poucos passos</p>
        </div>
    </header>

    <section class="how-it-works-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Passo a Passo</h2>
            </div>

            <div class="row g-4 justify-content-center mb-5">
                <div class="col-md-4">
                    <div class="step-card">
                        <div class="step-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h3 class="step-title">1. Cadastro Gratuito</h3>
                        <p>Crie sua conta em menos de 2 minutos. Basta informar e-mail, CPF e criar uma senha segura. Não cobramos nada pelo cadastro.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="step-card">
                        <div class="step-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h3 class="step-title">2. Consulta Veicular</h3>
                        <p>Na sua área logada, faça consultas gratuitas por placa e veja todos os débitos do veículo, incluindo multas e licenciamento.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="step-card">
                        <div class="step-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h3 class="step-title">3. Parcelamento</h3>
                        <p>Selecione os débitos que deseja parcelar, escolha em quantas vezes (até 12x) e finalize. Nós cuidamos de todo o processo com o órgão responsável.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-lg-6">
                    <h3 class="mb-4" style="color: var(--main-blue);">Benefícios</h3>
                    <ul class="benefits-list">
                        <li>Consulta veicular gratuita e ilimitada</li>
                        <li>Parcelamento em até 12x</li>
                        <li>Processo 100% online sem sair de casa</li>
                    </ul>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 text-center">
                            <h3 class="h4 mb-4">Pronto para começar?</h3>
                            <p class="mb-4">Cadastre-se agora e tenha acesso a todos os serviços de forma rápida e segura.</p>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-lg">
                                <i class="fas fa-user-plus me-2"></i>Criar Minha Conta
                            </a>
                            <p class="small mt-3">Já é cadastrado? <a href="{{ route('login') }}" style="color: var(--main-blue);">Faça login aqui</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Eagles Despachante. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 20);
        });

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
