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

Route::get(     '/pacienteShow',    'PacienteController@show'   )->name('Paciente_Show');
Route::get(     '/pacienteIndex',    'PacienteController@index'   )->name('Paciente_Index');

Route::get(     '/pacienteCreate',  'PacienteController@create' )->name('Paciente_Create');
Route::post(    '/pacienteCreate',  'PacienteController@store'  )->name('Paciente_Storage');

Route::get(     '/pacienteUpdate',  'PacienteController@edit'   )->name('Paciente_Edit');
Route::put(     '/pacienteUpdate',  'PacienteController@update' )->name('Paciente_Update');

Route::get(  '/pacienteDelete',  'PacienteController@destroy')->name('Paciente_Destroy');
