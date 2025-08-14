<?php

# Importações de classes do Laravel
use Illuminate\Support\Facades\Route;

# Define uma rota (URL)
Route::get('/', function () {
    return view('welcome');
});
