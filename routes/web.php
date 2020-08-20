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
    return view('index');
})->name('home');



Route::get('/produtos', 'ProdutoController@indexView')->name('produtos.index');
Route::get('/categorias', 'CategoriaController@index')->name('categorias.index');
Route::get('/categorias/novo', 'CategoriaController@create')->name('categorias.create');
Route::post('/categorias/novo', 'CategoriaController@store')->name('categorias.store');
Route::get('/categorias/editar/{id}', 'CategoriaController@edit')->name('categorias.edit');
Route::put('/categorias/editar/{id}', 'CategoriaController@update')->name('categorias.update');
Route::get('/categorias/apagar/{id}', 'CategoriaController@destroy')->name('categorias.destroy');