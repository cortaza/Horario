<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subsede;

class SubSedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /////////////////////////////////////////
        ////////////////SIBATE///////////////////
        /////////////////////////////////////////
        $SubSede1=new SubSede();
        $SubSede1->nombre='Sibate';
        $SubSede1->codigo_cen='313879';
        $SubSede1->save();
        /////////////////////////////////////////
        ////////////////UNIMINUTO////////////////
        /////////////////////////////////////////
        $SubSede2=new SubSede();
        $SubSede2->nombre='Uniminuto';
        $SubSede2->codigo_cen='313879';
        $SubSede2->save();
    }
}
