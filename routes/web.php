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

// Route::get('/', function () {
//     return view('temp');
// });

// ======================================================================
Route::get('/', 'ProductosController@inicio'); // página de inicio

Route::get('productos-de-la-familia-{familia}', 'ProductosController@productosporfamilia'); // listado de productos por familia

Route::get('pagina-del-producto-{id}-de-{familia}-{nombreslug}','ProductosController@productoindividual'); // ficha de producto individual

Route::get('/administracion/cargoproductos','ProductosController@cargoproductos'); // carga los productos desde svg en productos

Route::get('search','ProductosController@buscar'); // búsqueda de productos

