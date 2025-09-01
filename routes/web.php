<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ParcelaController;
use App\Http\Controllers\PlacaController;
use App\Http\Controllers\HistoricoVeicularController;

Route::get('/', function () {
    return view('home');
});

Route::get('/quem-somos', function () {
    return view('quem-somos');
});

Route::get('/como-funciona', function () {
    return view('como-funciona');
});

Route::post('/gerar-pdf', [ParcelaController::class, 'gerarPDF'])->name('gerar.pdf');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/calcular-parcelas', [ParcelaController::class, 'index'])->name('calcular-parcelas');
        Route::post('/calcular-parcelas', [ParcelaController::class, 'calcular'])->name('calcular-parcelas.post');

        Route::get('/consulta-veicular', [PlacaController::class, 'index'])->name('consulta-veicular');
        Route::post('/consulta-veicular', [PlacaController::class, 'consultar'])->name('consulta-veicular.post');

        Route::get('/historico', [PlacaController::class, 'historico'])->name('historico');
    });


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
