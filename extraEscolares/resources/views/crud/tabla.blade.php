@extends('layouts/main')
@section('contenido')
    
    <p class="fs-2 text-center mt-4"><img src="{{ asset('img/tec.ico') }}" alt="Icono" style="width: 55px; height: auto;"></td> Alumnos</p>
    <a href="/crud/create" class=" btn btn-primary">Agregar alumno</a>
    <div class="card mt-4">
        <div class="card-body">
            <table id="example" class="display nowrap border border-dark mt-2" style="width:100%" >
                <thead>
                    <tr>
                        <th>Nombre del credito</th>
                        <th>Email</th>
                        <th>Nombre de usuario</th>
                        <th>Password</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->tipo }}</td>
                        <td>{{ $item->categoria }}</td>
                        <td>{{ $item->cantidad }}</td>
                        <td>{{ $item->descripcion }}</td>

                    
                        <td>
                            <a href="{{ route( 'edit', $item->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                        <td> 
                            <a href="{{ route( 'show', $item->id )}}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
       $(document).ready(function() {
    $('#example').DataTable( {
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]
    } );
} );
    </script>  

    
@endsection
