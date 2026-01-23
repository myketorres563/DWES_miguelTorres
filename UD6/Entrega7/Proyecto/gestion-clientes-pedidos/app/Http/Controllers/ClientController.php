<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // Simplemente carga la vista con el formulario
    return view('clients.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // 1. Validación (Requisito: email único, campos obligatorios)
    $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email|unique:clients,email', // Valida que el email no exista en la tabla clients
        'telefono' => 'nullable|string',
        'direccion' => 'nullable|string',
    ]);

    // 2. Preparar los datos
    // El checkbox 'activo' no envía nada si no está marcado, así que forzamos un booleano
    $datos = $request->all();
    $datos['activo'] = $request->has('activo'); 

    // 3. Guardar en BD
    Client::create($datos);

    // 4. Redireccionar con mensaje de éxito
    return redirect()->route('clients.index')
                     ->with('success', 'Cliente creado correctamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        // Buscamos el cliente y cargamos la vista de edición
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        // Validación 
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $client->id, 
            'telefono' => 'nullable|string',
            'direccion' => 'nullable|string',
        ]);

        $datos = $request->all();
        $datos['activo'] = $request->has('activo');

        $client->update($datos);

        return redirect()->route('clients.index')
                        ->with('success', 'Cliente actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
