@extends('adminlte::page')

@section('title', 'CRUD EDITAR')

@section('content_header')
    <h1>Editar Incidencia</h1>
@stop

@section('content')
    <p>Vuelva a ingresar datos para editar la incidencia.</p>
    <form action="/articulos/{{ $articulo->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" value="{{ $articulo->codigo }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Modelo</label>
            <input id="modelo" name="modelo" type="text" class="form-control" value="{{ $articulo->modelo }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{ $articulo->descripcion }}">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="4">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop