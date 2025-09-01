<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacaConsulta extends Model
{
    use HasFactory;

    protected $table = 'placa_consulta';

    protected $fillable = ['placa', 'resultado'];

    protected $casts = [
        'resultado' => 'array',
    ];
}