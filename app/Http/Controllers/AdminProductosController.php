<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class AdminProductosController extends Controller
{

//--------------------------pagina home ------------------------------------------
    Public function home(){
        return view('admin.admin_home');
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
                $xprod->ultimoingreso = $datos[$contador][6];

            $xprod->save();
            $contador++;
        }

    return('Se han procesado los siguientes renglones: '.$lineas);
    }

// -------------- administrar productos ---------------------
Public function productos()
{
$productos = Producto::where('status','<>',999)
    ->orderBy('codigo')
    ->paginate(50);
    return view('admin.admin_productos')->with(compact('productos'));
}

// -------------- editar producto ---------------------
Public function edit($id)
{
    // return 'datos del producto '.$id;
    $producto = Producto::find($id);
    return view('admin.admin_editarproducto')->with(compact('producto'));
}

// -------------------- actualiza los datos del producto -------------------------------
Public function update(Request $request,$id)
{
    
    $producto = Producto::find($id);
    $slug = str_slug($request->input('nombre'),'-');
        // dd($id,$slug,$producto,$request->all());
        $textomal   = array('Ã¡','Ã³','Ã±','Ãº','Ã');
        $textobien  = array('á','ó','ñ','ú','Ñ');   

    $producto->nombre              = $request->input('nombre');
    $producto->nombreslug          = $slug;
    $producto->descripcioncorta    = $request->input('descripcioncorta');
    $producto->descripcionlarga    = str_replace($textomal , $textobien, $request->input('descripcionlarga'));
    $producto->status              = $request->input('status');
    $producto->ventaminima         = $request->input('ventaminima');
    $producto->ultimoingreso       = $request->input('ultimoingreso');
    $producto->save();
    return redirect('/administracion/productos');
}

// -------------------------------------------------------------------------------------------------------------

Public function search (Request $request) // búsqueda de productos... x nombre y código
    {
    // $buscar = $request->query ;
    $buscar = $request ['query'];
    $productos = Producto::where('nombre','like',"%$buscar%")->orWhere('codigo','like',"%$buscar%")
            ->orderBy('nombre')
            ->paginate(50);
    return view('admin.admin_productos')->with(compact('productos'));
    }

}
