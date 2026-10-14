<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Libro extends Model
{

    protected $fillable = [
        'titulo',
        'autor',
        'editorial',
        'cliente_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }


    /** @use HasFactory<\Database\Factories\LibroFactory> */
    use HasFactory;
}
