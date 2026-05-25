<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name',
        'species',
        'age',
        'owner_id',
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
