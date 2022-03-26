@extends('layouts.app')
@section('titulo','listado de docentes')
@section('contenido')
<center><h1>listado de docentes disponibles</h1></center>
<br>
{{--es un ciclo o bucle especial para arrays  existen bucles como for, while, do while, foreach--}}
<div class="row">
@foreach ($profe as $santi )
    {{--para llamar informacion de php basta con interpolar las variables usando la doble llave--}}

        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin-top: 30px">
            <img style ="height: 200px; width: 250px; margin:20px" src="{{Storage::url($santi->foto)}}" class="card-img-top mx-auto d-block" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{$santi['nombre']}}</h5>
                <h5 class="card-title">{{$santi['apellido']}}</h5>
                {{--<p class="card-text">{{$camila['descripcion']}}</p>--}}
                {{--se necesita el id para ver un registro en particular--}}
                <a href="/docentes/{{$santi->id}}" class="btn btn-dark">ver mas</a>
                </div>
            </div>
            <br>
        </div>

@endforeach
</div>
@endsection
