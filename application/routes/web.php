<?php

# Importações de classes do Laravel
use Illuminate\Support\Facades\Route;

# Define uma rota (URL)
Route::get('/', function () {
    return view('home');
});

Route::get('/painel', function() {
    return "<h1>Home</h1>";
 
});