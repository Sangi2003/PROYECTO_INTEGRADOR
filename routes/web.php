<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
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

//agenda
Route::get('/evento', [EventoController::class, 'index']);
Route::get('/evento/mostrar', [EventoController::class, 'show']);
Route::post('/evento/agregar', [EventoController::class, 'store']);
Route::post('/evento/editar/{id}', [EventoController::class, 'edit']);
Route::post('/evento/actualizar/{evento}', [EventoController::class, 'update']);
Route::post('/evento/borrar/{id}', [EventoController::class, 'destroy']);

//login y registro
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
