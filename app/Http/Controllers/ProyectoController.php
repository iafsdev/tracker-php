<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Lista de proyectos';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Formulario para crear proyecto';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Proyecto creado';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $proyecto)
    {
        return "Detalle del proyecto $proyecto";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $proyecto)
    {
        return "Formulario para editar el proyecto $proyecto";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $proyecto)
    {
        return "Proyecto $proyecto actualizado";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $proyecto)
    {
        return "Proyecto $proyecto eliminado";
    }
}
