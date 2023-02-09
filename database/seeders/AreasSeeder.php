<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Area_tematica1=new Area();
        $Area_tematica1->codigo_area='';
        $Area_tematica1->Nombre='Software';
        $Area_tematica1->codigo_red='';
        $Area_tematica1->save();
    }
}
