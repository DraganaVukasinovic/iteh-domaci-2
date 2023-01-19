<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predstava extends Model
{
    use HasFactory;   
    protected $fillable = [
        'naziv',
        'cena_karte',
        'opis',
        'trajanje' //u minutima
    ];
    public function izvodjenje()
    {
        return $this->hasMany(Izvodjenje::class);
    }
}
