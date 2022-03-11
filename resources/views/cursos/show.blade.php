@extends('layouts.app')

@section('titulo','detalle del curso')
@section('contenido')
<center>
    <img style ="height: 500px; width: 600px; margin:20px" src="{{Storage::url($cursito->imagen)}}" class="card-img-top mx-auto d-block" alt="Card image cap">
    <div class="card-body">
    <p class="card-text">{{$cursito['descripcion']}}</p>
    <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-dark">editar curso</a>
</center>
</div>

@endsection
