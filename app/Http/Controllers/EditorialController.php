<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editorial = Editorial::all();
        return $editorial;
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
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|integer',
            'contacto' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
        ]);

        $user = Editorial::create([
            'nombre' => $validatedData['nombre'],
            'telefono' => $validatedData['telefono'],
            'contacto' => $validatedData['contacto'],
            'direccion' => $validatedData['direccion'],
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
        $editorial = Editorial::findOrFail($id);
        return $editorial;
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
        $editorial = Editorial::findOrFail($id);
        $editorial->nombre = $request->nombre;
        $editorial->telefono = $request->telefono;
        $editorial->contacto = $request->contacto;
        $editorial->direccion = $request->direccion;
        $editorial->update();
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
        $editorial = Editorial::destroy($id);
        return response()->json([
            'message' => 'Remove Successfull',
            'status' => 200,
        ], 200);
    }
}
