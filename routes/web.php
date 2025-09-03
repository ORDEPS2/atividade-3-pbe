<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bakery', [PrincipalController::class, 'bakery']);

Route::get('/sobre', [PrincipalController::class, 'sobre']);

Route::get('/contato', [PrincipalController::class, 'contato']);

Route::post('/contato', [PrincipalController::class, 'enviarContato']);
