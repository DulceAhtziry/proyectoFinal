@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center fw-bold fs-3"><td class="icocod">&#10060;</td>Los datos a eliminar son: </h2>
                <ul class="fs-3 mt-4 font-monospace">
                    <li>El nombre del estudiante: {{ $items->nombre_alumno }} </li>
                    <li>El número de control es: {{ $items->numero_control }} </li>
                    <li>El telefono es: {{ $items->telefono }} </li>
                    <li>Nombre de la carrera: {{ $items->carrera->nombre_carreras }} </li>
                    <li>La fecha de nacimiento: {{ $items->fecha_nacimiento }}</li>
                    <li>Escuela anterior: {{ $items->escuela_anterior }} </li>
                    <li>Fecha de ingreso: {{ $items->fecha_ingreso }}</li>
                </ul>
                <form action="{{ route('destroy', $items->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mt-3">
                        <td class="icocod">&#10062;</td> Eliminar definitivamente
                    </button>
                </form>
                
            </div>
        </div>
    </div>
    
@endsection