<?php

# Importações de classes do Laravel
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NovidadesController;

# Define uma rota (URL)
Route::get('/', function() {
    return view('home'); # ou redirect('/rota')
});

Route::get('/painel', function() {
    return view('painel');
});

Route::get('/sobre', function() {
    return view('sobre');
});

Route::get('/novidades', function() {
    return view('novidades');
})->name("novidades");

# Rota que utiliza o método 'store' para cadastrar dados
Route::post('/novidades', [NovidadesController::class, 'index'])->name("novidades");

Route::get('dev/faker', [NovidadesController::class, 'dummyData']);