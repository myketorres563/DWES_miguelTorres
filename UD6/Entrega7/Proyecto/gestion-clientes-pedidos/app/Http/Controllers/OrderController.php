<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        // Traemos los pedidos con sus clientes (Eager Loading para optimizar)
        $orders = Order::with('client')->get();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Para crear un pedido, necesito la lista de clientes para el desplegable
        $clients = Client::all();
        return view('orders.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'numero_pedido' => 'required|unique:orders',
            'client_id' => 'required|exists:clients,id', // El cliente debe existir
            'fecha' => 'required|date',
            'estado' => 'required|in:pendiente,enviado,entregado,cancelado',
            'total' => 'required|numeric|min:0',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')
                         ->with('success', 'Pedido creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $clients = Client::all(); // Necesitamos la lista para el <select>
        return view('orders.edit', compact('order', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'numero_pedido' => 'required|unique:orders,numero_pedido,' . $order->id, // Ignora su propio ID al validar único
            'client_id' => 'required|exists:clients,id',
            'fecha' => 'required|date',
            'estado' => 'required|in:pendiente,enviado,entregado,cancelado',
            'total' => 'required|numeric|min:0',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')
                         ->with('success', 'Pedido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')
                         ->with('success', 'Pedido eliminado.');
    }
}
