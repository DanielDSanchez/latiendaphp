<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
            return view('cart.index');
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Persistir los datos en una sesión
        $producto = [[
            "prod_id" => $request->prod_id,
            "cantidad" => $request->cantidad,
            "precio" => Producto::find($request->prod_id)->precio,
            "nombre_prod" => Producto::find($request->prod_id)->nombre
        ]
        ];


        if( !session('cart')){
            $aux[] = $producto;
            //1. producto en el carrito
            session(['cart' => $aux]);
        }else{

            //extraer los datos del carrito de la variable de sesión    
            $aux = session('cart');
            //eliminar la variable de sesion
            session()->forget('cart');
            //agregar el nuevo producto a los ya existentes
            $aux[] = $producto;
            //volver a crear la variable de sesion
            session(['cart' => $aux]);
        }
        
        //redireccion catalogo de producto
        //con mensaje de exito

        return redirect('productos')
                ->with("mensaje", "producto añadido");


       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session()->forget('cart');
        return redirect('cart');
    }
}
