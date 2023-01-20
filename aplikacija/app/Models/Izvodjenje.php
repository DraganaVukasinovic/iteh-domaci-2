<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izvodjenje extends Model
{
    use HasFactory;
    protected $fillable = [
        'datum',
        'pozoriste',
        'predstava',
    ];

    public function pozoriste()
    {
        return $this->belongsTo(Pozoriste::class);
    }
    public function predstava()
    {
        return $this->belongsTo(Predstava::class);
    }
}
