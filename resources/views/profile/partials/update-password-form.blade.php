<div class="card shadow-lg border-danger">
    <div class="card-header bg-danger text-white">
        <h3 class="card-title"><i class="fas fa-lock"></i> Atualizar Senha</h3>
    </div>

    <div class="card-body">
        <form method="post" action="{{ route('password.update') }}">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="update_password_current_password" class="form-label fw-bold">
                    <i class="fas fa-key"></i> Senha Atual
                </label>
                <input type="password" id="update_password_current_password" name="current_password" class="form-control" autocomplete="current-password">
                @error('current_password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="update_password_password" class="form-label fw-bold">
                    <i class="fas fa-lock"></i> Nova Senha
                </label>
                <input type="password" id="update_password_password" name="password" class="form-control" autocomplete="new-password">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="update_password_password_confirmation" class="form-label fw-bold">
                    <i class="fas fa-check-circle"></i> Confirmar Senha
                </label>
                <input type="password" id="update_password_password_confirmation" name="password_confirmation" class="form-control" autocomplete="new-password">
                @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="d-flex align-items-center gap-3">
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-save"></i> Salvar
                </button>

                @if (session('status') === 'password-updated')
                    <p class="text-success fw-bold"><i class="fas fa-check"></i> Senha Atualizada!</p>
                @endif
            </div>
        </form>
    </div>
</div>
