@extends('home') <!-- Extende o layout da home -->

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Simular Parcelamento</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="valor">Valor Total</label>
                                    <input type="number" class="form-control" id="valor" placeholder="Ex: 5000" required>
                                </div>
                                <div class="form-group">
                                    <label for="parcelas">Número de Parcelas</label>
                                    <input type="number" class="form-control" id="parcelas" placeholder="Ex: 12" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Simular</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection