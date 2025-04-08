<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacaConsulta extends Model
{
    use HasFactory;

    protected $fillable = ['placa', 'user_id', 'ip_address'];
}