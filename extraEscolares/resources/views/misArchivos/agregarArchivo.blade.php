@extends('layouts/main')
@section('contenido')
<p class="fs-2 text-center mt-4"><img src="{{ asset('img/LOGOTEC.png') }}" alt="Icono" style="width: 55px; height: auto;"></td> Agregar archivo</p>
    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nombre del alumno</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Numero de control</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-8">
            <label for="inputAddress" class="form-label">Carrera</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-md-6">
            <label for="formFile" class="form-label">Evidencias</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="col-md-6">
            <label for="inputCity"  class="form-label">Ubicación fisica</label>
            <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
        </div>

        <div class="col-md-6">
            <label for="formFile" class="form-label">Constancias</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="col-md-6">
            <label for="inputCity"  class="form-label">Ubicación fisica</label>
            <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
        </div>
        
        <div class="col-md-6">
            <label for="formFile" class="form-label">Oficio de liberacion</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="col-md-6">
            <label for="inputCity"  class="form-label">Ubicación fisica</label>
            <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
    
@endsection
