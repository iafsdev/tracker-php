<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $proyecto)
    {
        return "Lista de tareas para el proyecto $proyecto";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $proyecto)
    {
        return "Formulario para crear una tarea para el proyecto $proyecto";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $proyecto)
    {
        return "Tarea creada para el proyecto $proyecto";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $tarea)
    {
        return "Detalle de la tarea $tarea";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $tarea)
    {
        return "Formulario para editar la tarea $tarea";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $tarea)
    {
        return "Tarea $tarea actualizada";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $tarea)
    {
        return "Tarea $tarea eliminada";
    }
}
