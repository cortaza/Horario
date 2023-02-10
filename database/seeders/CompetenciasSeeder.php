<?php

namespace Database\Seeders;

use App\Models\Competencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////////////////////////////////
        /////////////ADSI///////////////
        ////////////////////////////////
        $competencia1=new Competencia();
        $competencia1->codigo_comp=('220501006');
        $competencia1->nombre=('ESPECIFICAR');
        $competencia1->descripcion=('ESPECIFICAR LOS REQUISITOS NECESARIOS PARA DESARROLLAR EL SISTEMA DE
        INFORMACION DE ACUERDO CON LAS NECESIDADES DEL CLIENTE.');
        $competencia1->codigo_prog=('228106');
        $competencia1->save();
        
        $competencia1=new Competencia();
        $competencia1->codigo_comp=('220501007');
        $competencia1->nombre=('CONSTRUIR');
        $competencia1->descripcion=('CONSTRUIR EL SISTEMA QUE CUMPLA CON LOS REQUISITOS DE LA SOLUCIÓN
        INFORMÁTICA');
        $competencia1->codigo_prog=('228106');
        $competencia1->save();
        
        $competencia1=new Competencia();
        $competencia1->codigo_comp=('220501009');
        $competencia1->nombre=('PARTICIPAR');
        $competencia1->descripcion=('PARTICIPAR EN EL PROCESO DE NEGOCIACIÓN DE TECNOLOGÍA INFORMÁTICA PARA
        PERMITIR LA IMPLEMENTACIÓN DEL SISTEMA DE INFORMACIÓN.');
        $competencia1->codigo_prog=('228106');
        $competencia1->save();
        
        $competencia1=new Competencia();
        $competencia1->codigo_comp=('220501032');
        $competencia1->nombre=('ANALIZAR');
        $competencia1->descripcion=('ANALIZAR LOS REQUISITOS DEL CLIENTE PARA CONSTRUIR EL SISTEMA DE INFORMACION.');
        $competencia1->codigo_prog=('228106');
        $competencia1->save();
        
        $competencia1=new Competencia();
        $competencia1->codigo_comp=('220501033');
        $competencia1->nombre=('DISEÑAR');
        $competencia1->descripcion=('DISEÑAR EL SISTEMA DE ACUERDO CON LOS REQUISITOS DEL CLIENTE.');
        $competencia1->codigo_prog=('228106');
        $competencia1->save();
        
        $competencia1=new Competencia();
        $competencia1->codigo_comp=('220501034');
        $competencia1->nombre=('IMPLANTAR');
        $competencia1->descripcion=('IMPLANTAR LA SOLUCION QUE CUMPLA CON LOS REQUISISTOS PARA SU OPERACIÓN.');
        $competencia1->codigo_prog=('228106');
        $competencia1->save();
        
        $competencia1=new Competencia();
        $competencia1->codigo_comp=('220501035');
        $competencia1->nombre=('APLICAR');
        $competencia1->descripcion=('APLICAR BUENAS PRÁCTICAS DE CALIDAD EN EL PROCESO DE DESARROLLO DE SOFTWARE, DE ACUERDO CON EL REFERENTE ADOPTADO EN LA EMPRESA.');
        $competencia1->codigo_prog=('228106');
        $competencia1->save();
        
        $competencia1=new Competencia();
        $competencia1->codigo_comp=('240201500');
        $competencia1->nombre=('PROMOVER');
        $competencia1->descripcion=('PROMOVER LA INTERACCIÓN IDÓNEA CONSIGO MISMO, CON LOS DEMÁS Y CON LA
        NATURALEZA EN LOS CONTEXTOS LABORAL Y SOCIAL.');
        $competencia1->codigo_prog=('228106');
        $competencia1->save();
        
        $competencia1=new Competencia();
        $competencia1->codigo_comp=('');
        $competencia1->nombre=('');
        $competencia1->descripcion=('');
        $competencia1->codigo_prog=('228106');
        $competencia1->save();
        ////////////////////////////////
        /////////////ADSO///////////////
        ////////////////////////////////
        // $competencia1=new Competencia();
        // $competencia1->codigo_comp=('');
        // $competencia1->nombre=('');
        // $competencia1->descripcion=('');
        // $competencia1->codigo_prog=('');
        // $competencia1->save();
        ////////////////////////////////
        //////////PROGRAMACION//////////
        ////////////////////////////////
    }
}
