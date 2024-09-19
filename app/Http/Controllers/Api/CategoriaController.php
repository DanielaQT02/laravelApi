<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request; 



class CategoriaController extends Controller
{
    public function index(){
        return Categoria::all();

    }
    public function show(Categoria $categoria){
        return $categoria->load('recetas');
        
    }

}


