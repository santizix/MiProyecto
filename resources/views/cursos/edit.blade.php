@extends('layouts.app')
@section('titulo','editar curso')

@section('contenido')
<h3 class="text-center">editar curso</h3>
<form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="nombrecurso">modifique la descripcion del curso</label>
        <input name="nombre" id="nombrecurso" value="{{$cursito->nombre}}"  type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="descripcioncurso">descripcion del curso</label>
        <input name="descripcion" id="decripcioncurso" value="{{$cursito->descripcion}}" type="text" class="form-control" >
    </div>

     {{--<div class="row">
        @foreach ($cursito as $camila )
    <div class="col-sm">
         <div class="card text-center" style="width: 18rem; margin-top: 30px">
            <img style ="height: 200px; width: 250px; margin:20px" src="{{Storage::url($camila->imagen)}}" class="card-img-top mx-auto d-block" alt="Card image cap">
                <div class="card-body">
   </div>
   @endforeach
</div>--}}

    <div class="form-group">
        <label for="imagen">cargar nueva imagen del curso</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>

    <button type="submit" class="btn btn-primary">actualizar</button>

</form>
@endsection

