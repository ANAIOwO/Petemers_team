<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('appointment', 'App\Http\Controllers\AppointmentController');


Route::get('/service', function () {
    return view('service');
});

Route::get('/appointment/create', 'App\Http\Controllers\DynamicDependentcityhospital@index');

Route::post('/appointment/create/fetch', 'App\Http\Controllers\DynamicDependentcityhospital@fetch')->name('dynamicdependent.fetch');

Route::get('/dynamic_dependent', 'App\Http\Controllers\DynamicDependent@index');

//Route::post('dynamic_dependent/fetch', 'App\Http\Controllers\DynamicDependent@fetch')->name('dynamicdependent.fetch');
