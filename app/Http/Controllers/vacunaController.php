<?php

namespace App\Http\Controllers;

use App\Models\vacuna;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class vacunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacuna=vacuna::all();

        return view('vacuna.index',['vacuna'=>$vacuna]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vacuna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      


        $vacuna=Vacuna::create([
            'Nombre_vacuna'=>$request->Nombre_vacuna,
            'Fecha_ingresovacuna'=>$request->Fecha_ingresovacuna,
            'Stockvacuna' =>$request->Stockvacuna,
            'Lote' =>$request->Lote,
            'FechaVencimiento' =>$request->FechaVencimiento,

        ]);
        return redirect()->route('vacuna');


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
