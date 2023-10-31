<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PersonaController extends Controller
{
    public function index()
    {   return view("persona.index"); }


    public function adminView()
    {   return view("persona.admin"); }

    public function pacienteView()
    {   return view("persona.paciente"); }

    public function doctorView()
    {   return view("persona.doctor"); }

    public function secretariaView()
    {   return view("persona.secretaria"); }
    

    public function store(Request $request){}
    public function show(string $id){}
    public function edit(string $id){}
    public function update(Request $request, string $id){}
    public function destroy(string $id){}
}
