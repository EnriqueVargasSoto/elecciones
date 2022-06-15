<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;
use App\Models\Candidato;

class CandidatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $candidatos = Candidato::where('estado',true)->get();
        $departamentos = Departamento::where('estado', 'activo')->orderBy('departamento', 'ASC')->get();
        $provincias = Provincia::where('estado','activo')->orderBy('provincia', 'ASC')->get();
        $distritos = Distrito::where('estado','activo')->get();
        return view('intranet.pages.empresa.encuestas.candidatos')->with(compact('departamentos','provincias', 'distritos', 'candidatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Provincia::create([
            'nombre_corto' => $request->nombre_corto,
            'tipo' => $request->tipo,
            'departamento_id' => $request->departamento_id,
            'provincia_id' => $request->provincia_id,
            'distrito_id' => $request->distrito_id,
            'partido' => $request->partido,
            'nombre_apellido' => $request->nombre_apellido,
            'foto' => $request->foto,
            'observador' => $request->observador,
        ]);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $candidato = Candidato::find($id);

        $candidato->nombre_corto = $request->nombre_corto;
        $candidato->tipo = $request->tipo;
        $candidato->departamento_id = $request->departamento_id;
        $candidato->provincia_id = $request->provincia_id;
        $candidato->distrito_id = $request->distrito_id;
        $candidato->partido = $request->partido;
        $candidato->nombre_apellido = $request->nombre_apellido;
        $candidato->foto = $request->foto;
        $candidato->observador = $request->observador;
        $candidato->save();
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
