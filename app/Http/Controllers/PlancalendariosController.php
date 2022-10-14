<?php

namespace App\Http\Controllers;

use App\Models\Comunidad;
use App\Models\Plancalendarios;
use App\Models\vacuna;
use Illuminate\Http\Request;

class PlancalendariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plancalendarios=Plancalendarios::all();
       
        
        return view('plancalendarios.index',['plancalendarios'=>$plancalendarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunidades=Comunidad::all();
      //  return view('plancalendarios.create',['comunidades'=>$comunidades]);
      
        $vacuna=vacuna::all();
        return view('plancalendarios.create',['vacuna'=>$vacuna, 'comunidades'=>$comunidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $plancalendarios=Plancalendarios::create([
            'FechaVacunacion'=>$request->FechaVacunacion,
            'Estado'=>$request->Estado,
            'idComunidad'=>$request->idComunidad,
            'idvacuna'=>$request->idvacuna,


        ]);
        return redirect()->route('plancalendarios');
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