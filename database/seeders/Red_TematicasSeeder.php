<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Red_Tematica;

class Red_TematicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Red_tematica1=new Red_Tematica();
        $Red_tematica1->Nombre='Informática, Diseño y Desarrollo de Software';
        $Red_tematica1->save();
    }


}
