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
    public function categoria(){
        return $this->belongsTo(Categoria::class);
        
    }
    public function user(){
        return $this->belongsTo(User::class);
        
    }


}
