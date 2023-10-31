<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Especialidad_user;
use App\Models\User;


use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    public function index()
    {  return view("persona.especialidad"); }

    public function store(Request $request){

        $esp = Especialidad_user::create([
            'user_id' => Auth::user()->id,
            'especialidad_id' => $request->get('especialidad')
        ]); 

        return Redirect::to('doctorR');
    }


}
