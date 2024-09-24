<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\LibUserController;
use App\Models\LibUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// GET:
Route::get('/users', [LibUserController::class, 'index']);
// paraméteres útvonal, $ jel nem kell ide! Kebabcase a preferált
Route::get('/user/{id}', [LibUserController::class, 'show']);

// POST:
Route::post('/user', [LibUserController::class, 'store']);

// PUT
Route::put('/user/{id}', [LibUserController::class, 'update']);

// DELETE
Route::delete('/user/{id}', [LibUserController::class, 'destroy']);





Route::get('/books', [BookController::class, 'index']);
// paraméteres útvonal, $ jel nem kell ide! Kebabcase a preferált
Route::get('/book/{id}', [BookController::class, 'show']);

// POST:
Route::post('/book', [BookController::class, 'store']);

// PUT
Route::put('/books/{id}', [BookController::class, 'update']);

// DELETE
Route::delete('/book/{id}', [BookController::class, 'destroy']);


Route::get('/copies', [CopyController::class, 'index']);
// paraméteres útvonal, $ jel nem kell ide! Kebabcase a preferált
Route::get('/copy/{id}', [CopyController::class, 'show']);

// POST:
Route::post('/copy', [CopyController::class, 'store']);

// PUT
Route::put('/copy/{id}', [CopyController::class, 'update']);

// DELETE
Route::delete('/copy/{id}', [CopyController::class, 'destroy']);