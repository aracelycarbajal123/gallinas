<?php

namespace App\Http\Controllers;

use App\Models\Comunidad;
use App\Models\Plancalendarios;
use App\Models\vacuna;
use Illuminate\Http\Request;
use PDF;
use Keygen\Keygen;

class PlancalendariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plancalendario=Plancalendarios::where('Estado','Si')->get();
       
        
        return view('plancalendarios.index',['plancalendarios'=>$plancalendario]);
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
            'Estado'=>'Si',
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
        $comunidad=Comunidad::all();
        $vacuna=vacuna::all();
        $plancalendarios=Plancalendarios::findorfail($id);
        return view('plancalendarios.edit',compact(['plancalendarios','comunidad','vacuna']));
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
        $plancalendarios=Plancalendarios::findOrFail($id);
        $request->validate([
            'FechaVacunacion'=>['required', 'date'],
            
            'idComunidad'=>['required'],
            'idvacuna'=>['required'],

        ]);

        try{
            $plancalendarios->update($request->all());
            return redirect()->route('plancalendarios')
                ->with('success', 'Plan Actualizado');
        }

        catch(\Throwable $th){
            return redirect()->route('plancalendarios')
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
        $plancalendarios=Plancalendarios::findOrFail($id);
        $plancalendarios->Estado='no';
        $plancalendarios->save();

    


        return redirect()->route('plancalendarios')
            ->with('success', 'Plan Eliminado Correctamente');

    }

    public function createPDF() {
        //  dd('llamando pdf..');
          // // retreive all records from db
          $data=Plancalendarios::where('Estado','si')->get();
          // // share data to view
         $keygen= Keygen::numeric(12)->generate();
          view()->share('plancalendario',$data);
          $pdf=Pdf::loadview('plancalendarios.viewpdf',['data'=>$data,'keygen'=>$keygen]);
           //$pdf = PDF::loadView('pdf_view', $data);
          // // download PDF file with download method
           return $pdf->download('plancalendarios.pdf');
        }
}
