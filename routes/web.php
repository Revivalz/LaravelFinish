<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/countries', [CountryController::class, 'index']);

Route::get('/countries/create', [CountryController::class, 'create']);

Route::get('/countries/{country}', [CountryController::class, 'show']);

Route::post('/countries', [CountryController::class, 'store']);

Route::get('/countries/{country}/edit', [CountryController::class, 'edit']);

Route::put('/countries/{country}', [CountryController::class, 'update']);

Route::delete('/countries/{country}', [CountryController::class, 'destroy']);
