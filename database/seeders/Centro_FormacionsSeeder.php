<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Centro_Formacion;

class Centro_FormacionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Centro_formacion1=new Centro_Formacion();
        $Centro_formacion1->codigo_cen='313879';
        $Centro_formacion1->nr_ambientes='43';
        $Centro_formacion1->save();
    }
}
