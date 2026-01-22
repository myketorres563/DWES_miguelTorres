<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_pedido',
        'fecha',
        'estado',
        'total',
        'notas',
        'client_id' // ¡Importante! Necesitamos poder rellenar la clave foránea
    ];

    // Definimos la relación inversa: Un Pedido pertenece a un Cliente
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}