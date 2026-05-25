<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//escribimos la ruta con resource para index de forma directa
Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{id}', [UserController::class, 'detail']);