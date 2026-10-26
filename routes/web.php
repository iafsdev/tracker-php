<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/proyectos');

Route::resource('proyectos', ProyectoController::class);
Route::resource('proyectos.tareas', TareaController::class)->shallow();