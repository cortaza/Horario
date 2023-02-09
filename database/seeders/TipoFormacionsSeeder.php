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
        $Tipo_formacion1=new TipoFormacion();
        $Tipo_formacion1->codigo_formacion='';
        $Tipo_formacion1->nombre='';
        $Tipo_formacion1->save();
    }
}
