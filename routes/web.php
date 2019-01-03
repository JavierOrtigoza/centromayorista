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


// ======================================================================
Route::get('/', 'ProductosController@inicio'); // página de inicio

Route::get('productos-de-la-familia-{familia}', 'ProductosController@productosporfamilia'); // listado de productos por familia

Route::get('productos-de-la-marca-{marca}', 'ProductosController@productospormarca'); // listado de productos por marca

Route::get('pagina-del-producto-{id}-de-{familia}-{nombreslug}','ProductosController@productoindividual'); // ficha de producto individual

Route::get('search','ProductosController@buscar'); // búsqueda de productos

Route::get('productos-de-ultimo-ingreso.html','ProductosController@ultimoingreso');

// -------------------- rutas de administración ------------------
Route::middleware(['auth','admin'])->group(function () {
Route::get('/administracion/cargoproductos','AdminProductosController@cargoproductos'); // carga los productos desde svg en productos
Route::get('/administracion/productos','AdminProductosController@productos'); //listado de productos
Route::get('/administracion/productos/{id}/edit','AdminProductosController@edit'); //editar producto
Route::post('/administracion/productos/{id}/actualizar', 'AdminProductosController@update'); //actualiza los datos del producto editado
Route::get('/administracion','AdminProductosController@home'); //pagina de inicio de administración
Route::get('/administracion/search','AdminProductosController@search'); // busca productos en el listado de artículos
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
