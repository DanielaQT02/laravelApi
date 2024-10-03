<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecetaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tipo' => 'receta',
            'atributos' => [
                'categoria' => $this->categoria->nombre,
                'autor'=> $this->user->name,
                'titulo' => $this->titulo,
                'descripción' => $this->descripcion,
                'ingredientes' => $this->ingredientes,
                'instrucciones' => $this->instrucciones,
                'imagen' => $this->imagen,
                'etiquetas' =>$this->etiquetas->pluck('nombre')->implode(', '),

            ],
            
        ];
    }
}
