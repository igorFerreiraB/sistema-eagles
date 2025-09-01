<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacaConsulta extends Model
{
    use HasFactory;

    protected $table = 'placa_consulta';

    protected $fillable = ['user_id', 'placa', 'resultado'];

    protected $casts = [
        'resultado' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
    
    public function consultasPlaca()
    {
        return $this->hasMany(\App\Models\PlacaConsulta::class);
    }
}