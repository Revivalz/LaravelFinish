<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiariesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/diaries', [DiariesController::class, 'index']);

Route::get('/todos/create', [ToDoController::class, 'create']);
Route::get('/diaries/create', [DiariesController::class, 'create']);

Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::get('/diaries/{diary}', [DiariesController::class, 'show']);


Route::post('/todos', [ToDoController::class, 'store']); 
Route::post('/diaries', [DiariesController::class, 'store']); 

Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit']);
Route::get('/diaries/{diary}/edit', [DiariesController::class, 'edit']);

Route::put('/todos/{todo}', [ToDoController::class, 'update']);
Route::put('/diaries/{diary}', [DiariesController::class, 'update']);

Route::delete('/todos/{todo}', [ToDoController::class, 'destroy']);
Route::delete('/diaries/{diary}', [DiariesController::class, 'destroy']);