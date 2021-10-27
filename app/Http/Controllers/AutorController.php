<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autor = Autor::all();
        return $autor;
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
        $autor = Autor::create([
            'titulo' => $request['titulo'],
            'anyoed' => $request['anyoed'],
            'lugared' => $request['lugared'],
            'numed' => $request['numed'],
            'tipocubierta' => $request['tipocubierta'],
            'npaginas' => $request['npaginas'],
            'nstanteria' => $request['nstanteria'],
            'nejemplares' => $request['nejemplares'],
            'observaciones' => $request['observaciones'],
            'idautor' => $request['idautor'],
        ]);

        return response()->json([
            'message' => 'Create Succesfull',
            'status' => 200,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autor = Autor::findOrFail($id);
        return $autor;
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
        $autor = Autor::findOrFail($id);
        $autor->nombre = $request->nombre;
        $autor->apellido = $request->apellido;
        $autor->nacionalidad = $request->nacionalidad;
        $autor->centroEstudios = $request->centroEstudios;
        $autor->observaciones = $request->observaciones;
        $autor->update();
        return response()->json([
            'message' => 'Update Successfull',
            'status' => 200,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autor = Autor::destroy($id);
        return response()->json([
            'message' => 'Remove Successfull',
            'status' => 200,
        ], 200);
    }
}
