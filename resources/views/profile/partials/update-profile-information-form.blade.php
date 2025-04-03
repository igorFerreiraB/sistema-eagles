<div class="card shadow-lg border-primary">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title"><i class="fas fa-user-edit"></i> Informações do Perfil</h3>
    </div>

    <div class="card-body">
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="name" class="form-label fw-bold"><i class="fas fa-user"></i> Nome</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required autofocus>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div class="mt-2">
                        <p class="text-warning">
                            <i class="fas fa-exclamation-circle"></i> Seu email não está verificado. 
                            <button form="send-verification" class="btn btn-sm btn-outline-warning">
                                <i class="fas fa-paper-plane"></i> Reenviar Verificação
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="text-success"><i class="fas fa-check-circle"></i> Um novo link de verificação foi enviado para seu email.</p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="d-flex align-items-center gap-3">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Salvar
                </button>

                @if (session('status') === 'profile-updated')
                    <p class="text-success fw-bold"><i class="fas fa-check"></i> Salvo!</p>
                @endif
            </div>
        </form>
    </div>
</div>
