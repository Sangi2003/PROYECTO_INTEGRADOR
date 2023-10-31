<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Tabla extends Controller
{
    public function pacientesView()
    {
        $usuario=User::whereHas('roles', function($query){
            $query->where('name','paciente');
        })->orderBy('id','DESC')->get();

        return view('tablas.pacientes')->with('users', $usuario); 
    }
    public function doctoresView()
    {
        $usuario=User::whereHas('roles', function($query){
            $query->where('name','doctor');
        })->orderBy('id','DESC')->get();
        
        return view('tablas.pacientes')->with('users', $usuario); 
    }
    public function secretariasView()
    {
        $usuario=User::whereHas('roles', function($query){
            $query->where('name','secretaria');
        })->orderBy('id','DESC')->get();
        
        return view('tablas.pacientes')->with('users', $usuario);  
    }
    
}
