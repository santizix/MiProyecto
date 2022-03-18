<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class cursoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //creamos un array para poder manipular la informacion de la tabla cursos y asu ve actuara como un objeto
        $cursito = curso::all();
        //el metodo compact pide un parametro que sera nuestro array llamado cursito y va acompañando la vista que estamos llamando
       return view('cursos.index',compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   //con el metodo all veo toda la informacion
        //return $request->all();
        //obtuvimos el dato de lo que el usuario envia por el input
        //return $request->input('nombre');
        //creamos una nueva instancia del modelo
        $cursito = new curso();
        //esto me permitira manipular la tabla
        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');

        if($request->hasFile('imagen')){
        $cursito->imagen = $request->file('imagen')->store('public');
        }

        $cursito->save();
        return 'waw lograste guardar';
    }

    /**
     * muestra el recurso especificado (un registro es un recurso)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //creo un array con informacion del registro del id que viaja en la solicitud
        $cursito = curso::find($id);
        //asocio el array a la vista usando compact
        return view('cursos.show',compact('cursito'));
        //return $cursito;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = curso::find($id);
        return view('cursos.edit',compact('cursito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*con fill lleno todos los campos de la tabla cursos con la info que viene de request excepto lo que viene desde el input llamado imagen*/
        $cursito = curso::find($id);
        $cursito->fill($request->except('image'));
        if($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public');
            }

            $cursito->save();
        $cursito->save();
        return 'recurso actualizado';
        //return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
