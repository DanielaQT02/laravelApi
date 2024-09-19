<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etiqueta;


class EtiquetaController extends Controller
{
    
    public function index(){
        return Etiqueta::with('recetas')->get();

    }
    public function show(Etiqueta $etiqueta){
        return $etiqueta->load('recetas');
    }


}
