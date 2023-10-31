<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('persona', 'App\Http\Controllers\PersonaController');

Route::resource('especialidad', 'App\Http\Controllers\EspecialidadController');

//roles
Route::get('adminR', 'App\Http\Controllers\PersonaController@adminView');
Route::get('pacienteR', 'App\Http\Controllers\PersonaController@pacienteView');
Route::get('doctorR', 'App\Http\Controllers\PersonaController@doctorView');
Route::get('secretariaR', 'App\Http\Controllers\PersonaController@secretariaView');

//tablas
Route::get('pacientes', 'App\Http\Controllers\Tabla@pacientesView');
Route::get('doctores', 'App\Http\Controllers\Tabla@doctoresView');
Route::get('secretarias', 'App\Http\Controllers\Tabla@secretariasView');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
