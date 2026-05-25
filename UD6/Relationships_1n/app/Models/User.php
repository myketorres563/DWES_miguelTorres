<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

//This relation library is needed for the hasMany relation
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    // ...

    public function trophies(): HasMany
    {
        return $this->hasMany(Trophy::class);
    }
}