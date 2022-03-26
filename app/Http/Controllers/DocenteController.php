<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDocenetRequest;
use App\Http\Requests\storeDocenteRequest;
use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profe = docente::all();
        return view('docentes.index', compact('profe'));
        //return $profe;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocenteRequest $request)
    {
        $profe = new docente();
        //esto me permitira manipular la tabla
        $profe->nombre = $request->input('nombre');
        $profe->apellido = $request->input('apellido');
        $profe->titulo = $request->input('titulo');
        $profe->cursoAsociado = $request->input('cursoAsociado');

        if($request->hasFile('foto')){
        $profe->foto = $request->file('foto')->store('public');
        }

        $profe->save();
        return 'waw lograste guardar';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //creo un array con informacion del registro del id que viaja en la solicitud
        $profe = docente::find($id);
        //asocio el array a la vista usando compact
        return view('docentes.show',compact('profe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profe = docente::find($id);
        return view('docentes.edit',compact('profe'));
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
        $profe = docente::find($id);
        $profe->fill($request->except('foto'));
        if($request->hasFile('foto')){
            $profe->foto = $request->file('foto')->store('public');
            }


        $profe->save();
        return ' actualizado';
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
