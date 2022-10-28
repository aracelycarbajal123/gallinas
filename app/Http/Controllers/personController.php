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
        $person=Person::where('activo','si')->get();
       
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
        $comunidad=Comunidad::all();
        $person=Person::findorfail($id);
        return view('person.edit',compact(['person','comunidad']));
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
        $person=Person::findOrFail($id);
        $request->validate([
            'Nombres'=> ['required', 'string', 'max:255'],
            'Apellidos'=>['required', 'string', 'max:255'],
            'Dpi'=> ['required', 'string', 'max:255'],
            'Telefono'=> ['required', 'string', 'max:255'],
            'Email'=>['required', 'string', 'max:255'],
            'FechaNacimiento'=>['required', 'date', 'max:255'],
            'Activo'=>['string'],
            'idComunidad'=>['required'],
            

        ]);

        try{
            $person->update($request->all());
            return redirect()->route('person')
                ->with('success', 'persona actualizada');
        }

        catch(\Throwable $th){
            return redirect()->route('person')
            ->with('success', $th);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person=Person::findOrFail($id);
        $person->Activo='no';
        $person->save();


        return redirect()->route('person')
        ->with('success', 'Persona Eliminada Correctamente');
       

    }
}
