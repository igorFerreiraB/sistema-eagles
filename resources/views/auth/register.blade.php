<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eagles Despachante - Registro</title>

    <link rel="icon" href="{{ asset('images/placa.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .btn-blue {
            background-color: #003366;
            color: #fff;
            border: none;
        }

        .btn-blue:hover {
            background-color: #003366;
        }
        .invalid-feedback {
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 0.25rem;
        }

        .is-invalid {
            border-color: #dc3545 !important;
        }
    </style>
</head>
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="/" class="d-flex align-items-center">
                <img src="{{ asset('images/eagles.png') }}" alt="Eagles Despachante" style="width: 50px; height: auto; margin-right: 10px;">
                <span><b>Eagles</b> Despachante</span>
            </a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Crie uma nova conta</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <input id="name" type="text" name="name" class="form-control" placeholder="Nome" required autofocus autocomplete="name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" placeholder="Email" value="{{ old('email') }}" required autocomplete="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        @error('email')
                            <div class="invalid-feedback" style="display: block; width: 100%;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                        @error('password')
                            <div class="invalid-feedback" style="display: block; width: 100%;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Confirmar Senha" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agree" name="agree">
                                <label for="agree">
                                    {{ __('Termos e condições') }}
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-4">
                            <button type="submit" class="btn btn-blue btn-block">{{ __('Registrar') }}</button>
                        </div>
                    </div>
                </form>

                <p class="mb-0">
                    <a href="{{ route('login') }}" class="text-center">
                        {{ __('Faça login') }}
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script>
        document.getElementById('password').addEventListener('input', function() {
            const feedback = document.getElementById('password-feedback');
            if (this.value.length > 0 && this.value.length < 8) {
                feedback.style.display = 'block';
                feedback.textContent = 'A senha deve ter no mínimo 8 caracteres';
            } else {
                feedback.style.display = 'none';
            }
        });
    </script>
</body>
</html>
