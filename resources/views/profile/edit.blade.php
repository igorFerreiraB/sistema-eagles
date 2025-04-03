@extends('layouts.navigation')

@section('title', 'Perfil')

@section('content_header')
    <h1 class="text-primary"><i class="fas fa-user-circle"></i> Meu Perfil</h1>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-primary">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title"><i class="fas fa-user-edit"></i> Atualizar Informações</h3>
                </div>
                <div class="card-body">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="card shadow-lg mt-4 border-success">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title"><i class="fas fa-key"></i> Alterar Senha</h3>
                </div>
                <div class="card-body">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="card shadow-lg mt-4 border-danger">
                <div class="card-header bg-danger text-white">
                    <h3 class="card-title"><i class="fas fa-trash-alt"></i> Excluir Conta</h3>
                </div>
                <div class="card-body">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@stop
