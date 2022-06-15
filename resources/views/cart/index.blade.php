@extends('layouts.principal')

@session('contenido')
<div class="row">
    <h1>Carrito de Compras</h1> 
</div>
<div class="row">
    <div class="col s12">
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $index => $prod)
                    <tr>
                        <td>{{ var_dunmp($prod) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <form action="route('cart.destroy', 1)" method="post">
    @method('DELETE')    
    @csrf
        <button type="submit">
            Vaciar Carrito
        </button>
    </form>
</div>
    
@endsection