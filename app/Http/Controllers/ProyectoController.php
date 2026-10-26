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
    public function show(string $id)
    {
        return "Detalle del proyecto $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Formulario para editar el proyecto $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Proyecto $id actualizado";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Proyecto $id eliminado";
    }
}
