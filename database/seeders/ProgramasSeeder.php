<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Programa;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Programa1=new Programa();
        $Programa1->codigo_prog='228106';
        $Programa1->nombre='ADSI (Analisis y Desarrollo de Sistemas de Informacion)';
        $Programa1->estado='1';
        $Programa1->nivel_formacion='tecnologo';
        $Programa1->duracion='24 meses';
        $Programa1->version='102';
        $Programa1->codigo_cen='313879';
        $Programa1->save();
    }
}
