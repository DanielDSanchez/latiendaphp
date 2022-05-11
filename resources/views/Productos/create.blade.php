@extends('Layouts.principal')
@section('contenido') 


<div class="row">
  <h1 class="indigo-text text-darken-4">Nuevo Producto</h1>
</div>
<div class="row center-align">
    <form class="col s12" method="post" action="{{ route('Productos.store') }}"> 
    @csrf  
    <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nombre Producto" id="nombre" type="text" class="validate" name="nombre">
          <label for="nombre">Id Producto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <textarea id="desc" class="materialize-textarea" id="desc" name="desc"></textarea>
          <label for="desc">Descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="precio" type="text" class="validate" name="precio">
          <label for="precio">Precio</label>
        </div>
      </div>
    
    
      
      <div class="row">
        <div class="input-field col s4">
        <select name="categoria">
        <option value="" disabled selected>Choose your option</option>
        @foreach($Categorias as $categoria)
          <option value="{{$categoria->id}}">{{$categoria->Nombre}}</option>
        @endforeach
        </select>
        <label>Categoria</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
        <select name="marca">
        <option value="" disabled selected>Choose your option</option>
        @foreach($marcas as $marca)
          <option value="{{$marca->id}}">{{$marca->Nombre}}</option>
        @endforeach
        </select>
        <label>Marca</label>
        </div>
      </div>
      <div class="col s6">
      <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
      </div>
      </button>
    </form>
  </div>
 
  @endsection