<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

class ProductosController extends Controller
{

// ----------muestra los productos de cada familia-------------------------------------------
//
    Public function productosporfamilia($familia)
        {
            $producto = Producto::where('familia',$familia)
                ->orderBy('nombre')
                ->paginate(24);
            return view('mostrarproductos')->with(compact('producto','familia'));
        }
// -------------- carga los productos en la base de datos desde un csv ---------------------
    Public function cargoproductos()
        {
        $ruta = public_path('parasubir2.csv'); // lugar donde está el archivo
        $datos = array_map('str_getcsv',file($ruta)); //convierto cada línea en una inst. de array
        // return $datos;
        $contador = 1;
        $lineas=sizeof($datos);
        $lineas--;
        
            while ($contador <= $lineas)
            {
                $xprod = new \App\Producto();
                        $txtprod = utf8_decode(utf8_encode($datos[$contador][2]));
                        $txtcorto= nl2br(utf8_encode($datos[$contador][3]));
                    $xprod->codigo = $datos[$contador][0];
                    $xprod->codigofacturacion = $datos[$contador][0]; //
                    $xprod->nombre = $txtprod; //
                    $xprod->nombreslug =str_slug($txtprod,'-'); //
                    // $xprod->descripcioncorta = substr($txtcorto,0,120);
                    $xprod->mostrar = $datos[$contador][1];
                    $xprod->status = $datos[$contador][1];
                    $xprod->descripcionlarga = nl2br(utf8_encode($datos[$contador][3]));
                    $xprod->moneda = $datos[$contador][7];
                    $xprod->precio = $datos[$contador][8];
                    $xprod->imagen = $datos[$contador][4];
                    $xprod->ventaminima = $datos[$contador][5];
                    $xprod->familia = $datos[$contador][9];
                    $xprod->nombrefigaro = nl2br($datos[$contador][10]);
                    $xprod->marca = $datos[$contador][11];
                $xprod->save();
                $contador++;
            }

        return('Se han procesado los siguientes renglones: '.$lineas);
        }
// -------------------------------------------------------------------------------------------------------------
Public function productoindividual($id)
        {
        $producto = Producto::find($id);
        return view('productoindividual')->with(compact('producto'));
        }


// -------------------------------------------------------------------------------------------------------------

Public function inicio() // página de inicio de la aplicación
        {
        $producto = Producto::all()->random(16); // selecciona 16 arts aleatoriamente
        return view('inicio')->with(compact('producto'));
        // return $producto;
        }

// -------------------------------------------------------------------------------------------------------------

Public function buscar (Request $request) // búsqueda de productos... x nombre y código
    {
        // $buscar = $request->query ;
        $buscar = $request ['query'];
        $producto = Producto::where('nombre','like',"%$buscar%")->orWhere('codigo','like',"%$buscar%")
                ->orderBy('nombre')
                ->paginate(24);

            return view('mostrarbusqueda')->with(compact('producto','buscar'));


    }
// --------------------------------------------------------------------------------------
}
