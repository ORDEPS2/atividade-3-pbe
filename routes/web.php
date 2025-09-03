<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bakery', [PrincipalController::class, 'bakery']);

Route::get('/sobre-nos', [PrincipalController::class, 'sobre-nos']);

