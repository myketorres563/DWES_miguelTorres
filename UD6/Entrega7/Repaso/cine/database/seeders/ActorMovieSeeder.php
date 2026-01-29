<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;
use App\Models\Movie;

class ActorMovieSeeder extends Seeder
{
    public function run(): void
    {
        Actor::insertOrIgnore([
            ['name' => 'Ana Torres',  'birthdate' => '1990-04-12', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Luis Romero',  'birthdate' => '1985-09-01', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Marta Gil',    'birthdate' => '1993-02-20', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Carlos Vega',  'birthdate' => '1979-11-30', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sofía Núñez',  'birthdate' => '1998-07-05', 'created_at' => now(), 'updated_at' => now()],
        ]);

        Movie::insertOrIgnore([
            ['title' => 'Horizonte de Código',     'year' => 2021, 'genre' => 'Drama',    'synopsis' => 'Un equipo lucha por entregar a tiempo.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Bug en Producción',       'year' => 2020, 'genre' => 'Thriller', 'synopsis' => 'Un fallo crítico desata el caos.',      'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Refactor',                'year' => 2022, 'genre' => 'Comedia',  'synopsis' => 'Cambiarlo todo para que no cambie nada.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'La Última Compilación',   'year' => 2019, 'genre' => 'Acción',   'synopsis' => 'Una noche, un despliegue, mil problemas.', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Silencio en el Servidor', 'year' => 2023, 'genre' => 'Misterio', 'synopsis' => 'Algo no cuadra en los logs.',          'created_at' => now(), 'updated_at' => now()],
        ]);

        $actors = Actor::orderBy('id')->take(5)->get();
        $movies = Movie::orderBy('id')->take(5)->get();

        foreach ($movies as $i => $movie) {
            $movie->actors()->syncWithoutDetaching([
                $actors[$i % 5]->id,
                $actors[($i + 1) % 5]->id,
            ]);
        }
        Movie::factory()->count(10)->create();

    }
}
