<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlacaCache extends Model
{
    protected $fillable = ['placa', 'dados'];
    protected $casts = [
        'dados' => 'json'
    ];
}