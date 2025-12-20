<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class PlacaCache extends Model
{
    protected $fillable = ['placa', 'dados', 'user_id'];
    protected $casts = [
        'dados' => 'json'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
