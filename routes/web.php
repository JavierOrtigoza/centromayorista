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

// -------------------- ruta de administración ------------------
Route::get('/administracion/cargoproductos','AdminProductosController@cargoproductos'); // carga los productos desde svg en productos
Route::get('/administracion/actualizar-disponibilidad','AdminProductosController@dispobibilidad'); //chequea estado de los productos
Route::get('/administracion/actualizar-precios', 'AdminProductosController@precios'); //chequea precios

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
