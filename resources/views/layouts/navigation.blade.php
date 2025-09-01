<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- AdminLTE CSS -->
    <link rel="icon" href="{{ asset('images/placa.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="routesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="routesDropdown">
                    <li><a class="dropdown-item" href="{{ route('dashboard.calcular-parcelas') }}"> Calcular Parcelas</a></li>
                    <li><a class="dropdown-item" href="{{ route('dashboard.consulta-veicular') }}"> Consulta veicular</a></li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"></i> {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li class="dropdown-item text-center fw-bold">{{ Auth::user()->name }}</li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">
                            <i class="fas fa-user-cog me-2"></i> Perfil
                        </a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt me-2"></i> Sair
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ route('dashboard') }}" class="brand-link d-flex align-items-center">
            <img src="{{ asset('images/eagles.png') }}" alt="Eagles Despachante" style="width: 40px; height: 40px; margin-right: 10px;">
            <span class="brand-text font-weight-light">Eagles Despachante</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.calcular-parcelas') }}" class="nav-link {{ request()->routeIs('calcular.parcelas') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-calculator"></i>
                            <p>Calcular Parcelas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.consulta-veicular') }}" class="nav-link {{ request()->routeIs('placa.consultar') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-car"></i>
                            <p>Consulta de Placas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.historico') }}" class="nav-link {{ request()->routeIs('placa.historico') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-search"></i>
                            <p>Consulta de Placas</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid pt-3">
                @yield('content')
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</div>
</body>
</html>
