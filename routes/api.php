<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/saludo', [TaskController::class, 'saludar']);
Route::get('/tasks', [TaskController::class, 'index']); // ruta que usamos para ir a la ventana principal, aqui podriamos pedir todas las tasks y mostrarlas

Route::post('/tasks', [TaskController::class, 'create']); // ruta que usaremos para crear una nueva tarea es basicamente lo mismo pero por el metodo post
Route::delete('/tasks/{id_tastk}', [TaskController::class, 'delete']); // ruta que usaremos para eliminar una task
Route::put('/tasks/{id}', [TaskController::class, 'update']); // ruta que usaremos para actualizar una task
