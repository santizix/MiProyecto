{{--para poder heredar la plantilla necesito hereder la extencion @extends--}}
@extends('layouts.app')
@section('titulo','crear registro')
@section('contenido')

<h3 class="text-center">crear nuevo curso</h3>
<form action="/cursos" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nombrecurso">nombre del curso</label>
        <input name="nombre" id="nombrecurso"type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="descripcioncurso">descripcion del curso</label>
        <input name="descripcion" id="decripcioncurso" type="text" class="form-control" >
    </div>
    <div class="form-group">
        <label for="imagen">cargar imagen del curso</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>


    {{--SANTIAGO. PUSO EL DIV DE LA IMAGEN CON SU LABEL E INPUT POR FUERA
        DEL FORM, Y POR ESO NO SE ENVIA NI NADA

        --}}
    <button type="submit" class="btn btn-primary">crear<</button>

</form>

@endsection
{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>vista de registros</title>
    </head>
    <body>
        --}}
        {{--boostrap requiere un div container para mostrar los elementos centrados y ordenados--}}
        {{--
        <div class="container">
            <br>
            <h3 class="text-center">crear nuevo curso</h3>
            <form action="/cursos" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombrecurso">nombre del curso</label>
                    <input name="nombre" id="nombrecurso"type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descripcioncurso">descripcion del curso</label>
                    <input name="descripcion" id="decripcioncurso" type="text" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary">crear<</button>
            </form>
        </div>
    </body>
</html>

--}}
