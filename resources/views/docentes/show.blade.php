@extends('layouts.app')

@section('titulo','detalle del profesor')
@section('contenido')
<center>
    <img style ="height: 500px; width: 600px; margin:20px" src="{{Storage::url($profe->foto)}}" class="card-img-top mx-auto d-block" alt="Card image cap">
    <div class="card-body">
    <p class="card-text">{{$profe['nombre']}}</p>
    <p class="card-text">{{$profe['apellido']}}</p>
    <p class="card-text">{{$profe['titulo']}}</p>
    <p class="card-text">{{$profe['cursoAsociado']}}</p>
    <a href="/docentes/{{$profe->id}}/edit" class="btn btn-dark">editar profesor</a>
</center>
</div>

@endsection
