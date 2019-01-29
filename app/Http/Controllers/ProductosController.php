<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

class ProductosController extends Controller
{

// ----------muestra los productos de cada familia-------------------------------------------

Public function productosporfamilia($familia)
    {

        

// where('familia',$familia)

        $producto = Producto::where('familia',$familia) 
        ->where('status','<>',0)
        ->orderBy('nombre')
        ->paginate(24);
    return view('mostrarproductos')->with(compact('producto','familia'));
    }

// ----------muestra los productos de último ingreso-------------------------------------------

Public function ultimoingreso()
    {
    $producto = Producto::where('ultimoingreso',1)
        ->where('status','<>',0)
        ->orderBy('nombre')
        ->paginate(24);
    return view('ultimoingreso')->with(compact('producto'));
    }


Public function productoindividual($id)
    {
    $producto = Producto::find($id);
    $txt_largo= nl2br($producto->descripcionlarga);
    return view('productoindividual')->with(compact('producto','txt_largo'));
    }

// -------------------------------------------------------------------------------------------------------------

Public function inicio() // página de inicio de la aplicación
    {
    $producto = Producto::all()->where('status','<>',0)->where('familia','<>','SEX TOYS')
    ->random(16); // selecciona 16 arts aleatoriamente
    return view('inicio')->with(compact('producto'));
    // return $producto;
    }

// -------------------------------------------------------------------------------------------------------------

Public function buscar (Request $request) // búsqueda de productos... x nombre y código
    {
    // $buscar = $request->query ;
    $buscar = $request ['query'];
    $producto = Producto::where('nombre','like',"%$buscar%")->where('status','<>',0)
            ->orWhere('codigo','like',"%$buscar%")->where('status','<>',0)
            ->orderBy('nombre')            
            ->paginate(24);
    return view('mostrarbusqueda')->with(compact('producto','buscar'));
    }

// ----------muestra los productos de cada marca -------------------------------------------

Public function productospormarca($marca)
    {
    $producto = Producto::where('marca',$marca)
        ->where('status','<>',0)
        ->orderBy('nombre')
        ->paginate(24);
    return view('mostrarmarca')->with(compact('producto','marca'));
    }


}
