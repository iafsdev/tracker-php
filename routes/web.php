<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/proyectos');

Route::get('/proyectos', function () {
    return 'Lista de proyectos';
})->name('proyectos.index');

Route::get('/proyectos/crear', function () {
    return 'Formulario para crear proyecto';
})->name('proyectos.create');

Route::get('/proyectos/{proyecto}', function (string $proyecto) {
    return "Detalle del proyecto $proyecto";
})->name('proyectos.show');

Route::get('/proyectos/{proyecto}/editar', function (string $proyecto) {
    return "Formulario para editar el proyecto $proyecto";
})->name('proyectos.edit');

Route::get('/proyectos/{proyecto}/tareas/crear', function (string $proyecto) {
    return "Formulario para crear una tarea para el proyecto $proyecto";
})->name('tareas.create');

Route::get('/tareas/{tarea}/editar', function (string $tarea) {
    return "Formulario para editar la tarea $tarea";
})->name('tareas.edit');
