<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title','year','genre','synopsis'];

    public function actors()
    {
        return $this->belongsToMany(\App\Models\Actor::class)->withTimestamps();
    }
}
