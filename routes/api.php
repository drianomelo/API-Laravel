<?php

use App\Http\Controllers\UsuarioController;

Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::get('/usuarios/{cpf}', [UsuarioController::class, 'show']);