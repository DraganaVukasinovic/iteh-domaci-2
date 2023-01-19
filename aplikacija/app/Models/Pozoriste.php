<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pozoriste extends Model
{
    use HasFactory;
    protected $fillable = [
        'adresa',
        'naziv',
        'grad',
    ];

    public function izvodjenje()
    {
        return $this->hasMany(Izvodjenje::class);
    }

}
