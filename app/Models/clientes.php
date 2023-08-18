<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = [
        'nome',
        'endereco',
        'bairro',
        'cep',
        'cidade',
        'estado'
    ];

    use HasFactory;
}
