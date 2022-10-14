<?php

namespace App\Http\Controllers;

use App\Models\Comunidad;
use App\Models\Person;
use Illuminate\Http\Request;

class personController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person=Person::all();
       
        
        return view('person.index',['person'=>$person]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunidades=Comunidad::all();
        return view('person.create',[ 'comunidades'=>$comunidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $person=person::create([
            'Nombres'=>$request->Nombres,
            'Apellidos'=>$request->Apellidos,
            'Dpi'=>$request->Dpi,
            'Telefono'=>$request->Telefono,
            'Email'=>$request->Email,
            'FechaNacimiento'=>$request->FechaNacimiento,
            'Activo'=>'si',
            'idComunidad'=>$request->idComunidad,
            'Tipopersona'=>'Beneficiario',


        ]);
        return redirect()->route('person');
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
