<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothingItemController;

Route::resource('clothing-items', ClothingItemController::class);

