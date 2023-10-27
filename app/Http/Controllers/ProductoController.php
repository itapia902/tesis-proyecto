<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto=Producto::all();

        return view ('welcome1',compact('producto')); //Va a la vista para ingresar el producto
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('producto/ingresarPrOducto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        if($request->hasFile('productoImagen'))
        {
            $file=$request->file('productoImagen');
            $name=time().$file->getClientOriginalName();                        
            $file->move(public_path().'/images/', $name);

            $producto= new Producto();
            $producto->producto_Nombre=$request->productoNombre;
            $producto->Categoria_Id=$request->categoriaId;
            $producto->producto_Precio=$request->productoPrecio;
            $producto->producto_Descripcion=$request->productoDescripcion;
            $producto->producto_Cantidad=$request->productoCantidad;
            $producto->producto_Imagen=$name;

            $producto->save();
        }
        else
        {
            echo("Hubo un problema al cargar la imagen,intentelo mas tarde");
            

        }
            

        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
