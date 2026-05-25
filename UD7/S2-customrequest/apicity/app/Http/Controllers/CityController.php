<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // Asegura que hereda bien
use App\Models\City;                // Importa el modelo City
use App\Http\Requests\CityRequest;  // Importa tu validación
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;  
use App\Http\Resources\CityResource;
use Illuminate\Http\Resources\Json\JsonResource; // Importa el tipo de respuesta JSON

class CityController extends Controller
{
    // ... el resto de tu código igual
    /**
     * Display a listing of the resource.
     */
public function index(): JsonResource
{
    return CityResource::collection(City::all());
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
 public function store(CityRequest $request): JsonResponse
{
    $city = City::create($request->validated());

    return response()->json([
        'success' => true,
        'data' => $city
    ], 201);
}

    /**
     * Display the specified resource.
     */
   public function show(string $id): JsonResponse
{
    $city = City::find($id);

    return response()->json($city, 200);
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CityRequest $request, string $id): JsonResponse
{
    $city = City::find($id);

    $city->name = $request->name;
    $city->population = $request->population;
    $city->postalcode = $request->postalcode;
    $city->save();

    return response()->json([
        'success' => true,
        'data' => $city
    ], 200);
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id): JsonResponse
{
    $city = City::find($id);

    if ($city) {
        $city->delete();
    }

    return response()->json([
        'success' => true
    ], 200);
}
}
