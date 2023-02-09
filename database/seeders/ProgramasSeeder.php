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
        /////////////////////////////////////////
        ////////////////ADSI/////////////////////
        /////////////////////////////////////////
        $Programa1=new Programa();
        $Programa1->codigo_prog='228106';
        $Programa1->nombre='ADSI (Analisis y Desarrollo de Sistemas de Informacion)';
        $Programa1->estado='1';
        $Programa1->nivel_formacion='tecnologo';
        $Programa1->duracion='24 meses';
        $Programa1->version='102';
        $Programa1->codigo_cen='313879';
        $Programa1->save();
        /////////////////////////////////////////
        ////////////////PSOFTWARE////////////////
        /////////////////////////////////////////
        $Programa1=new Programa();
        $Programa1->codigo_prog='233104';
        $Programa1->nombre='Programacion de Software';
        $Programa1->estado='1';
        $Programa1->nivel_formacion='tecnico';
        $Programa1->duracion='2208 horas';
        $Programa1->version='1';
        $Programa1->codigo_cen='313879';
        $Programa1->save();
        /////////////////////////////////////////
        ////////////////ADSO/////////////////////
        /////////////////////////////////////////
        $Programa1=new Programa();
        $Programa1->codigo_prog='228118';
        $Programa1->nombre='ADSO (Analisis y Desarrollo de Software)';
        $Programa1->estado='1';
        $Programa1->nivel_formacion='tecnologo';
        $Programa1->duracion='3984 horas';
        $Programa1->version='1';
        $Programa1->codigo_cen='313879';
        $Programa1->save();
    }
}
