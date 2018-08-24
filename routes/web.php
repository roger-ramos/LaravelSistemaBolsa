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

//Route::post('/controla', function () {

  //  return view('controla');
//});

Route::get('departamentos', 'ControllerTeste@FazerDownload')->middleware('auth');;

Route::post('departamento', 'ControllerTeste@postDep')->middleware('auth');;

Route::get('teste', 'Departamento@PegarDepartamentos');

Route::post('contato', 'HomeController@postContato');

Route::get('/download', function () {
    return view('download');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
