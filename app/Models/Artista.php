<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Artista extends Model
{
    public function estilo()
    {
        return $this->belongsTo(Estilo::class, 'estilo_id', 'id');
    }
}
