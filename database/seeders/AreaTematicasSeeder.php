<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AreaTematica;

class AreaTematicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Area_tematica1=new AreaTematica();
        $Area_tematica1->Nombre='Software';
        $Area_tematica1->codigo_red='1';
        $Area_tematica1->save();
    }
}
