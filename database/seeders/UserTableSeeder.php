<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Santiago";
        $user->last_name = "Giron Lozano";
        $user->document = "1005893342";
        $user->adress = "Cra 29 # 98 - 51";
        $user->email = "gironlozano1975@gmail.com";
        $user->tel = "3188048049";
        $user->password = "norig2003";
        $user->save();

        $user->roles()->attach(Role::where('name', 'paciente')->first());

        $user = new User();
        $user->name = "Esteban";
        $user->last_name = "Gonzalez Ceballos";
        $user->document = "1104804532";
        $user->adress = "Cra 12e";
        $user->email = "estebangonzalez@gmail.com";
        $user->tel = "3162380774";
        $user->password = "norig2003";
        $user->save();

        $user->roles()->attach(Role::where('name', 'doctor')->first());
        $user->especialidades()->attach(Especialidad::where('name', 'otorrino')->first());

        $user = new User();
        $user->name = "Julian Andres";
        $user->last_name = "Cifuentes Villada";
        $user->document = "1006053806";
        $user->adress = "60 cuadras de Cosmocentro";
        $user->email = "cifu@gmail.com";
        $user->tel = "3177100525";
        $user->password = "norig2003";
        $user->save();

        $user->roles()->attach(Role::where('name', 'doctor')->first());
        $user->especialidades()->attach(Especialidad::where('name', 'aneste')->first()); 

        $user = new User();
        $user->name = "Andres Mauricio";
        $user->last_name = "Muñoz Puyo";
        $user->document = "12345678";
        $user->adress = "En el sur";
        $user->email = "andrespuyo@gmail.com";
        $user->tel = "3106017492";
        $user->password = "norig2003";
        $user->save();

        $user->roles()->attach(Role::where('name', 'admin')->first()); 
        
    }
}
