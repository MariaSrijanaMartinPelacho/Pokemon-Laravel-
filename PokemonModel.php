<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonModel extends Model
{
    use HasFactory;

    protected $fillable=[
        'Nombre',
        'Tipo',
        'Tamaño',
        'Peso'
    ];
}