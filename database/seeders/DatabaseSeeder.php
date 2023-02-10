<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([CentroFormacionsSeeder::class]);
        $this->call([ProgramasSeeder::class]);
        $this->call([RedTematicasSeeder::class]);
        $this->call([TipoFormacionsSeeder::class]);
        $this->call([SubSedesSeeder::class]);
        $this->call([AreaTematicasSeeder::class]);
        $this->call([InstructoresSeeder::class]);
        $this->call([FichasSeeder::class]);
    }
}
