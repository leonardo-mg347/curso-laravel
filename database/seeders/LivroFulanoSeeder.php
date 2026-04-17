<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LivroFulano;

class LivroFulanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $livro_fulano = [
            'titulo' => "Quincas Borba",
            'autor'  => "Machado de Assis",
            'isbn'   => "9780"
        ];
        LivroFulano::create($livro_fulano);
        LivroFulano::factory(100)->create();
    }
}
