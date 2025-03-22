@extends('home') <!-- Extende o layout da home -->

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Consulta de Placa</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="placa">Número da Placa</label>
                                    <input type="text" class="form-control" id="placa" placeholder="Ex: ABC1D23" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Consultar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection