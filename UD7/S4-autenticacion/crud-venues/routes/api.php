<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\EventVenueController;

Route::prefix('v1')->group(function () {

    // Auth
    Route::post('/auth/register', [AuthController::class, 'register']);
    Route::post('/auth/login', [AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->post('/auth/logout', [AuthController::class, 'logout']);

    // EventVenues (público: listar/ver)
    Route::get('/event-venues', [EventVenueController::class, 'index']);
    Route::get('/event-venues/{eventVenue}', [EventVenueController::class, 'show']);

    // EventVenues (protegido: crear/editar/borrar)
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/event-venues', [EventVenueController::class, 'store']);
        Route::match(['put','patch'], '/event-venues/{eventVenue}', [EventVenueController::class, 'update']);
        Route::delete('/event-venues/{eventVenue}', [EventVenueController::class, 'destroy']);
    });

});