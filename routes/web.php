<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Paciente

Route::get( '/pacienteShow',    'PacienteController@show'   )->name('Paciente_Show');
Route::get( '/pacienteIndex',   'PacienteController@index'   )->name('Paciente_Index');

Route::get( '/pacienteCreate',  'PacienteController@create' )->name('Paciente_Create');
Route::post('/pacienteCreate',  'PacienteController@store'  )->name('Paciente_Storage');

Route::get( '/pacienteUpdate',  'PacienteController@edit'   )->name('Paciente_Edit');
Route::put( '/pacienteUpdate',  'PacienteController@update' )->name('Paciente_Update');

Route::get( '/pacienteDelete',  'PacienteController@destroy')->name('Paciente_Destroy');

//Medico

Route::get( '/medicoShow',      'MedicoController@show'   )->name('Medico_Show');
Route::get( '/medicoIndex',     'MedicoController@index'   )->name('Medico_Index');

Route::get( '/medicoCreate',    'MedicoController@create' )->name('Medico_Create');
Route::post('/medicoCreate',    'MedicoController@store'  )->name('Medico_Storage');

Route::get( '/medicoUpdate',    'MedicoController@edit'   )->name('Medico_Edit');
Route::put( '/medicoUpdate',    'MedicoController@update' )->name('Medico_Update');

Route::get( '/medicoDelete',    'MedicoController@destroy')->name('Medico_Destroy');

//Especialidad

Route::get( '/especialidadShow',    'EspecialidadController@show'   )->name('Especialidad_Show');
Route::get( '/especialidadIndex',   'EspecialidadController@index'   )->name('Especialidad_Index');

Route::get( '/especialidadCreate',  'EspecialidadController@create' )->name('Especialidad_Create');
Route::post('/especialidadCreate',  'EspecialidadController@store'  )->name('Especialidad_Storage');

Route::get( '/especialidadUpdate',  'EspecialidadController@edit'   )->name('Especialidad_Edit');
Route::put( '/especialidadUpdate',  'EspecialidadController@update' )->name('Especialidad_Update');

Route::get( '/especialidadDelete',  'EspecialidadController@destroy')->name('Especialidad_Destroy');