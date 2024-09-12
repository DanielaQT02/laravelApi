<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class);
        
    }
}
