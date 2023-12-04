<?php

use App\Http\Controllers\TablaApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/tabla/crear', [TablaApiController::class, 'store']); // Crear un nuevo registro
Route::delete('/tabla/eliminar/{id}', [TablaApiController::class, 'destroy']); // Eliminar un registro
Route::get('/tabla/{id}', [TablaApiController::class, 'show']); // Mostrar un registro específico
Route::get('/tabla', [TablaApiController::class, 'index']); // Mostrar todos los registros
Route::put('/tabla/modificar/{id}', [TablaApiController::class, 'update']); // Actualizar un registro
