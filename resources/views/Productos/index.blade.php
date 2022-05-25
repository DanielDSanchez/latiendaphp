@extends('Layouts.principal')
@section('contenido') 

    <div class="col s12">
        <h1 class="center-align">Catalogo Productos</h1>
    </div>
    @foreach($productos as $producto)
    <div class="row">
      <div class="col s5">
      <div class="card ">
    <div class="card-content">
      <img src="{{asset('img/'.$producto->Imagen)}}" class="responsive-img" width="320em"> 
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#{{$producto->id}}">Test 1</a></li>
        <li class="tab"><a class="active" href="#{{$producto->id}}1">Test 2</a></li>
        <li class="tab"><a href="#{{$producto->id}}2">Test 3</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="{{$producto->id}}">{{$producto->Nombre}}</div>
      <div id="{{$producto->id}}1">Descripcion: {{$producto->Descripcion}}</div>
      <div id="{{$producto->id}}2">Precio:{{$producto->Precio}} </div>
    </div>
  </div>
      </div>
    
    </div>
    
    @endforeach

@endsection