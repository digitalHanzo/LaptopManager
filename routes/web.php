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
    return view('dashboard');
});

//VIEWS
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/scan', function () { return view('scan'); });
Route::get('/entrance', function () { return view('entrances'); });
Route::get('/event', function () { return view('events'); });
Route::get('/laptop', function () { return view('laptops'); });
Route::get('/asignations', function () { return view('asignations'); });
Auth::routes();

//APIS
Route::apiResource('/api/laptop', 'LaptopController');
Route::apiResource('/api/asignation', 'AsignationController');
Route::apiResource('/api/entrance', 'EntranceController');
Route::apiResource('/api/event', 'EventController');
Route::apiResource('/api/user', 'UserController');

//Auxiliar
Route::get('/get-image', 'AuxiliarController@exampleImage');