<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libro = Libro::all();
        return $libro;
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
        $libro = Libro::create([
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
        $libro = Libro::findOrFail($id);
        return $libro;
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
        $libro = Libro::findOrFail($id);
        $libro->titulo = $request->titulo;
        $libro->anyoed = $request->anyoed;
        $libro->lugared = $request->lugared;
        $libro->numed = $request->numed;
        $libro->tipocubierta = $request->tipocubierta;
        $libro->npaginas = $request->npaginas;
        $libro->nstanteria = $request->nstanteria;
        $libro->nejemplares = $request->nejemplares;
        $libro->observaciones = $request->observaciones;
        $libro->idautor = $request->idautor;
        $libro->update();
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
        $libro = Libro::destroy($id);
        return response()->json([
            'message' => 'Remove Successfull',
            'status' => 200,
        ], 200);
    }
}
