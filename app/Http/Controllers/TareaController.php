<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $proyectoId)
    {
        return "Lista de tareas para el proyecto $proyectoId";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $proyectoId)
    {
        return "Formulario para crear una tarea para el proyecto $proyectoId";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $proyectoId)
    {
        return "Tarea creada para el proyecto $proyectoId";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Detalle de la tarea $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Formulario para editar la tarea $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Tarea $id actualizada";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Tarea $id eliminada";
    }
}
