@extends('adminlte::page')

@section('title', 'CRUD CREATE')

@section('content_header')
    <h1>Crear Incidencias</h1>
@stop

@section('content')
    <p>Ingrese los datos para registrar una nueva incidencia.</p>

    <form action="/articulos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Modelo</label>
            <input id="modelo" name="modelo" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" class="form-control" tabindex="3" style="height: 200px"></textarea>
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