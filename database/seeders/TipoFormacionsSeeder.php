<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoFormacion;

class TipoFormacionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /////////////////////////////////////////
        ////////////////CADENA///////////////////
        /////////////////////////////////////////
        $Tipo_formacion1=new TipoFormacion();
        $Tipo_formacion1->nombre='cadena_formacion';
        $Tipo_formacion1->save();
        /////////////////////////////////////////
        ////////////////REGULAR//////////////////
        /////////////////////////////////////////
        $Tipo_formacion1=new TipoFormacion();
        $Tipo_formacion1->nombre='Oferta_regular';
        $Tipo_formacion1->save();
    }
}
