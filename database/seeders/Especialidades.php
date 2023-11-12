<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Especialidades extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $espe = new Especialidad();
        $espe->name = 'otorrino';
        $espe->description = 'Otorrinolaringología';
        $espe->save(); 

        $espe = new Especialidad();
        $espe->name = 'general';
        $espe->description = 'Medicina General';
        $espe->save(); 

        $espe = new Especialidad();
        $espe->name = 'pediatra';
        $espe->description = 'Pediatría';
        $espe->save(); 

        $espe = new Especialidad();
        $espe->name = 'aneste';
        $espe->description = 'Anestesiología';
        $espe->save(); 
    }
}
