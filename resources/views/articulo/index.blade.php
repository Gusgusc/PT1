@extends('adminlte::page')

@section('title', 'CRUD INDEX')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    {{-- <p>Visualice las incidencias creadas.</p> --}}
    {{-- <a href="articulos/create" class="btn btn-primary mb-3">CREAR</a> --}}
    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" onClick="abrir()">
        BORRAR 2
      </button>
      <div class="container-sm">
        <div class="card">
            <div class="card-header">
              Incidencias
            </div>
            <div class="card-body">
                <table id="articulos" class="table table-striped shadow-lg mt-4" style="width:100%">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Código</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articulos as $articulo)
                        <tr>
                            <td>{{ $articulo->id }}</td>
                            <td>{{ $articulo->codigo }}</td>
                            <td>{{ $articulo->modelo }}</td>
                            <td>{{ $articulo->descripcion }}</td>
                            @if ($articulo->estado == 1)
                                <td><span class="badge rounded-pill bg-warning text-dark">Pendiente</span></td>
                            @else
                            <td><span class="badge rounded-pill bg-success text-dark">Completado</span></td>
            
                            @endif
                            <td>
                                <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST">
                                <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-info">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
      </div>
              <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
    <style>
        .dt-button {
        padding: 0 !important;
        border: none !important;
    }
    </style>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#articulos').DataTable({
                "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
            },
            dom: 'Bfrtip',
                buttons: [
            {
                text: '<button class="btn btn-primary" onClick="redirige()">Crear</button>'
                
            }
        ]
            });
        });
        function redirige() {
            location.replace('articulos/create');
        }
        function abrir() {
            $("#exampleModal").modal('show');
        }
    </script>
@stop


