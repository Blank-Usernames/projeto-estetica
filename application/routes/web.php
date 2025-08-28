<?php

# Importações de classes do Laravel
use Illuminate\Support\Facades\Route;

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
});