<?php

use App\Http\Controllers\ClothingItemController;

//you can define a route for each method instead
Route::resource('clothing-items', ClothingItemController::class);

