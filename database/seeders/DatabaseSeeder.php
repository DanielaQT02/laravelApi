<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Receta;
use App\Models\Etiqueta;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(29)->create();

        User::factory()->create([
            'name' => 'Daniela Quiroz Torres',
            'email' => 'danniquiroz@admin.com',
        ]);

        Categoria::factory(10)->create();
        Receta::factory(100)->create();
        Etiqueta::factory(50)->create();
        
        //Relacionar de muchos a muchos

        $recetas = Receta::all();
        $etiquetas = Etiqueta::all();

        foreach ($recetas as $receta) {
            $receta -> etiquetas()->attach($etiquetas->random(rand(2,4)));
            

        }

    }
}
