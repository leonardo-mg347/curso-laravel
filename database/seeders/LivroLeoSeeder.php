<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LivroLeo;

class LivroLeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $livro_exemplo = [
            'titulo'    => "Maze Runner: Correr ou Morrer",
            'autor'     => "James Dashner",
            'isbn'      => "019287657814529"
        ];
        LivroLeo::create($livro_exemplo);
        LivroLeo::factory(50)->create();
    }
}
