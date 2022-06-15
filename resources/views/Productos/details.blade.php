@extends('layouts.principal')

@section('contenido')
<div class="row">
    <h1>{{ $producto->nombre }}</h1>
</div>

<div class="row">
    <div class="col s8">
        <div class="row">
            <div class="col s8">
            <img src="{{ asset('img/'.$producto->imagen) }}" width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col s8">
                <ul>
                    <li>
                        <strong>Marca: </strong>{{ $producto->marca->nombre}}
                    </li>    
                    <li><strong>Descripción:</strong>{{ $producto->descripcion}}</li>
                    <li>
                        <strong>Categoria: </strong>{{ $producto->categoria->nombre}}
                    </li>
                    <li>
                        <strong>Precio: </strong>{{ $producto->precio}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col s4">
        <form action="{{ route('cart.store') }}" method="post">
        @csrf
        <div class="row">
            <h3>Añadir al carrito</h3>
        </div>
        <input type="hidden" name="prod_id" value="{{ $producto->id }}">
        <div class="row">
            <div class="col s4 input-field">
                <select name="cantidad" id="cantidad">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <label for="cantidad">Cantidad:</label>
            </div>
        </div>
        <div class="row">
            <div class="col s4 input-field">
                <button class="btn waves-effect waves-light" type="submit">
                    Añadir
                </button>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection