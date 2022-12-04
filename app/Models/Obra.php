<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Obra extends Model
{
    public function categorias()
    {        
        return $this->belongsToMany(Categoria::class, 'obra_categoria','obra_id','categoria_id');
    }

    public function artista()
    {
        return $this->belongsTo(Artista::class, 'artista_id', 'id');
    }
}
