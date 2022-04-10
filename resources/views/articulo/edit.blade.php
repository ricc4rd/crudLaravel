@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar Registros</h2>

<form action="/articulos/{{$articulo->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
    <label for="" class="form-label">Codigo</label>
    <input type="text" id="codigo" name="codigo" type="text" class="form-control" tabindex="1" value="{{$articulo->codigo}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$articulo->descripcion}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" class="form-control" step="any" value="0.00" value="{{$articulo->precio}}">
</div>
<a href="/articulos"  class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>


@endsection