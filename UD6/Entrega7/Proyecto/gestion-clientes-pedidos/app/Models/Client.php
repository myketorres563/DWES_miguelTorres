<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Permite la asignación masiva de estos campos
    protected $fillable = ['nombre', 'email', 'telefono', 'direccion', 'activo'];

    // Definimos la relación: Un Cliente tiene muchos Pedidos (Orders)
    public function orders()
    {
        // Usamos el nombre del modelo en inglés como lo creaste
        return $this->hasMany(Order::class);
    }
}