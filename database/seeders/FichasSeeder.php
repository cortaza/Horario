<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ficha;

class FichasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /////////////////////////////
        ////////////ADSI/////////////
        /////////////////////////////
        $ficha1=new Ficha();
        $ficha1->nro_ficha=('2515397');
        $ficha1->jornada=('Diurna');
        $ficha1->modalidad=('Presencial');
        $ficha1->nro_aprendices=('24');
        $ficha1->codigo_prog=('228106');
        $ficha1->codigo_formacion=('1');
        $ficha1->dni=('5123421323');
        $ficha1->save();
        /////////////////////////////
        ////////////ADSO/////////////
        /////////////////////////////
        // $ficha2=new Ficha();
        // $ficha2->nro_ficha=('');
        // $ficha2->jornada=('Diurna');
        // $ficha2->modalidad=('Presencial');
        // $ficha2->nro_aprendices=('');
        // $ficha2->codigo_prog=('');
        // $ficha2->codigo_formacion=('1');
        // $ficha2->dni=('');
        // $ficha1->save();
        // /////////////////////////////
        // ////////////PROGRAMACION/////
        // /////////////////////////////
        // $ficha3=new Ficha();
        // $ficha3->nro_ficha=('');
        // $ficha3->jornada=('Diurna');
        // $ficha3->modalidad=('Presencial');
        // $ficha3->nro_aprendices=('');
        // $ficha3->codigo_prog=('');
        // $ficha3->codigo_formacion=('2');
        // $ficha3->dni=('');
        // $ficha1->save();
    }
}
