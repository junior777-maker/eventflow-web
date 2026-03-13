<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AuthController;

// Grupo Protegido: Só acessa se estiver Logado
Route::middleware(['auth'])->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('home');
    Route::post('/eventos/salvar', [EventController::class, 'store'])->name('events.store');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Rotas de Autenticação (Acesso Público)
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/logar', [AuthController::class, 'login'])->name('auth.login');

Route::get('/registrar', function () {
    return view('register');
})->name('register');

Route::post('/registrar', [AuthController::class, 'register'])->name('auth.register');