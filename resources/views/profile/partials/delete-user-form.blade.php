<div class="card shadow-lg border-danger">
    <div class="card-header bg-danger text-white">
        <h3 class="card-title"><i class="fas fa-exclamation-triangle"></i> Excluir Conta</h3>
    </div>

    <div class="card-body">
        <p class="text-muted">
            <i class="fas fa-info-circle"></i> Uma vez que sua conta for excluída, todos os seus dados serão removidos permanentemente. 
            Certifique-se de baixar qualquer informação que deseja manter antes de continuar.
        </p>

        <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
            <i class="fas fa-trash"></i> Excluir Conta
        </button>
    </div>
</div>

<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="confirmDeleteModalLabel"><i class="fas fa-exclamation-triangle"></i> Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem certeza de que deseja excluir sua conta? Esta ação não pode ser desfeita.</p>

                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')

                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold"><i class="fas fa-key"></i> Senha</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Digite sua senha" required>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">
                            <i class="fas fa-times"></i> Cancelar
                        </button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i> Excluir Conta
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
