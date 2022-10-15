<?php

namespace App\Http\Controllers;

use App\Models\Aves;
use App\Models\Comunidad;
use App\Models\Control;
use App\Models\Person;
use App\Models\vacuna;
use Illuminate\Http\Request;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $control=Control::all();
        return view('control.index',['control'=>$control]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $person=Person::all();
        $comunidades=Comunidad::all();
        $vacuna=vacuna::all();
        $aves=Aves::all();
        

          return view('control.create',['vacuna'=>$vacuna, 'comunidades'=>$comunidades, 'person'=>$person, 'aves'=>$aves]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $control=Control::create([
            'idperson'=>$request->idperson,
            'idComunidad'=>$request->idComunidad,
            'idvacuna'=>$request->idvacuna,
            'idaves'=>$request->idaves,
            'cantidad'=>$request->cantidad,
        ]);
        $idvacuna=$request->idvacuna;
        //como hacer para actualizar el stock de vacunas
        $vacuna=vacuna::findOrFail($idvacuna);

        //dd($vacuna);
        $totalTem=$vacuna->Stockvacuna ;
        $cantidad=$request->cantidad;
        $resultado=intval($totalTem-$cantidad);

        $vacuna->Stockvacuna=$resultado;
        $vacuna->save();
        return redirect()->route('control');
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
