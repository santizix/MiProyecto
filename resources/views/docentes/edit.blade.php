@extends('layouts.app')
@section('titulo','editar docente')

@section('contenido')
<h3 class="text-center">editar docente</h3>
<form action="/docentes/{{$profe->id}}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="nombre">modificar nombres</label>
        <input name="nombre" id="nombre" value="{{$profe->nombre}}"  type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="apellido">modificar apellido</label>
        <input name="apellido" id="apellido" value="{{$profe->apellido}}" type="text" class="form-control" >
    </div>
    <div class="form-group">
        <label for="titulo">modificar titulo</label>
        <input name="titulo" id="titulo" value="{{$profe->titulo}}"  type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="cursoAsociado">modificar curso asociados</label>
        <input name="cursoAsociado" id="cursoAsociado" value="{{$profe->cursoAsociado}}"  type="text" class="form-control">
    </div>

     {{--<div class="row">
        @foreach ($profe as $camila )
    <div class="col-sm">
         <div class="card text-center" style="width: 18rem; margin-top: 30px">
            <img style ="height: 200px; width: 250px; margin:20px" src="{{Storage::url($camila->foto)}}" class="card-img-top mx-auto d-block" alt="Card image cap">
                <div class="card-body">
   </div>
   @endforeach
</div>--}}

    <div class="form-group">
        <label for="foto">cargar nueva foto del docente</label>
        <br>
        <input name="foto" id="foto" type="file">
    </div>

    <button type="submit" class="btn btn-primary">actualizar</button>

</form>
@endsection

