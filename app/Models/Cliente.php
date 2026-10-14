<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libro;

class Cliente extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
    ];

    public function libros()
    {
        return $this->hasMany(Libro::class);
    }

    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;
}
