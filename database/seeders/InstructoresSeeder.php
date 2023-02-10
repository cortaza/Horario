<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Instructore;

class InstructoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Instructor1=new Instructore();
        $Instructor1->dni='5123421323';
        $Instructor1->nombre='ARLENYS CAROLINA';
        $Instructor1->apellido='NIEVES';
        $Instructor1->telefono='5421458720';
        $Instructor1->correo='acnv@misena.edu.co';
        $Instructor1->estado='1';
        $Instructor1->tipo_contrato='Planta';
        $Instructor1->codigo_area='1';
        $Instructor1->codigo_red='1';
        $Instructor1->save();
        
        $Instructor2=new Instructore();
        $Instructor2->dni='7863984932';
        $Instructor2->nombre='NEIDY ADRIANA';
        $Instructor2->apellido='ESPITIA';
        $Instructor2->telefono='7807979793';
        $Instructor2->correo='naespitia@sena.edu.co';
        $Instructor2->estado='1';
        $Instructor2->tipo_contrato='Planta';
        $Instructor2->codigo_area='1';
        $Instructor2->codigo_red='1';
        $Instructor2->save();
        
        $Instructor3=new Instructore();
        $Instructor3->dni='7891739827';
        $Instructor3->nombre='SAMUEL RICARDO';
        $Instructor3->apellido='PADILLA';
        $Instructor3->telefono='8432743279';
        $Instructor3->correo='spadilla@sena.edu.co';
        $Instructor3->estado='1';
        $Instructor3->tipo_contrato='Planta';
        $Instructor3->codigo_area='1';
        $Instructor3->codigo_red='1';
        $Instructor3->save();
        
        $Instructor4=new Instructore();
        $Instructor4->dni='4781263871';
        $Instructor4->nombre='Evelio';
        $Instructor4->apellido='Sanches';
        $Instructor4->telefono='8947189232';
        $Instructor4->correo='huvhasiouh@misena.edu.co';
        $Instructor4->estado='1';
        $Instructor4->tipo_contrato='Planta';
        $Instructor4->codigo_area='1';
        $Instructor4->codigo_red='1';
        $Instructor4->save();
    }
}
