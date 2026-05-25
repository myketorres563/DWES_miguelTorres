<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventVenueController extends Controller
{
     // Público
    public function index()
    {
        return response()->json(
            EventVenue::query()->latest()->get()
        );
    }

    // Público
    public function show(EventVenue $eventVenue)
    {
        return response()->json($eventVenue);
    }

   // Protegido
    public function store(StoreEventVenueRequest $request)
    {
        $created = EventVenue::create($request->validated());
        return response()->json($created, 201);
    }

    // Protegido
    public function update(UpdateEventVenueRequest $request, EventVenue $eventVenue)
    {
        $eventVenue->update($request->validated());
        return response()->json($eventVenue);
    }

    // Protegido
    public function destroy(EventVenue $eventVenue)
    {
        $eventVenue->delete();
        return response()->json(null, 204);
    }
}
