<?php

namespace App\Http\Controllers;
use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Producto;
use App\http\Requests\StoreProductoRequest;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();

        return view('productos.index')
                ->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Seleccionar Marcas con Modelo Marca
        $marcas = Marca::all();
        //Seleccionar Categorias con Modelo Categoria
        $categorias = Categoria::all();
        return view('productos.create')
            ->with("marcas",$marcas)
            ->with("Categorias",$categorias)
        ;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        var_dump($request->all());
        $p = new Producto();
        $p->Nombre = $request->nombre;
        $p->Descripcion = $request->desc;
        $p->Precio = $request->precio;
        $p->marca_id = $request->marca;
        $p->categoria_id = $request->categoria;
        
        $archivo = $request->imagen;
        $p->imagen = $archivo->getClientOriginalName();

        
        $archivo->move(public_path()."/img" , 
        $archivo->getClientOriginalName());
        
        $p->save();
        //var_dump($request->imagen->getClientOriginalName());
        //$request->imagen->move('public/img');
        //echo "<hr/>";
        //var_dump(public_path());
        //$p->save();
        return redirect('Productos/create')
        ->with('mensaje',"producto registrado exitosamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "Detalle Producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        echo "Form editar Producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        echo "Actualizar Producto";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        echo "Eliminar Producto";
    }
}
