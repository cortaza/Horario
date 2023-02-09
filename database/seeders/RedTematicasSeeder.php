<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RedTematica;

class RedTematicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Red_tematica1=new RedTematica();
        $Red_tematica1->Nombre='Informática, Diseño y Desarrollo de Software.';
        $Red_tematica1->save();
    }


}
