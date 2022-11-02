<?php

namespace App\Http\Controllers;

use App\Models\Aves;
use App\Models\Comunidad;
use App\Models\Control;
use App\Models\Person;
use App\Models\vacuna;
use Illuminate\Http\Request;
use PDF;
use Keygen\Keygen;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $controls=Control::where('activo','si')->get();
        return view('control.index',['controls'=>$controls]);
        
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
     

        $controls=Control::create([
            'idperson'=>$request->idperson,
            'idComunidad'=>$request->idComunidad,
            'idvacuna'=>$request->idvacuna,
            'idaves'=>$request->idaves,
            'cantidad'=>$request->cantidad,
            'activo'=>'si'
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
        //l
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
        $person=Person::all();
        $aves=Aves::all();
        $vacuna=vacuna::all();
        $control=Control::findorfail($id);
        return view('control.edit', compact(['control', 'comunidad','person', 'aves', 'vacuna']));
      
     
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
        $control=Control::findOrFail($id);
        $request->validate([
            'idperson'=>['required'],
            'idComunidad'=>['required'],
            'idvacuna'=>['required'],
            'idaves'=>['required'],
            'cantidad'=>['required', 'string'],


        ]);
        try{
            $control->update($request->all());
            return redirect()->route('control')
                ->with('success','control Actualizado');
        }

        catch(\Throwable $th){
            return redirect()->route('control')
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
        $control=Control::findOrFail($id);
        $control->activo='no';
        $control->save();

        return redirect()->route('control')
            ->with('success', 'Control eliminado correctamente');



    }

    public function createPDF() {
        //  dd('llamando pdf..');
          // // retreive all records from db
          $data=Control::where('activo','si')->get();
          // // share data to view
         $keygen= Keygen::numeric(12)->generate();
          view()->share('control',$data);
          $pdf=Pdf::loadview('control.viewpdf',['data'=>$data,'keygen'=>$keygen]);
           //$pdf = PDF::loadView('pdf_view', $data);
          // // download PDF file with download method
           return $pdf->download('control.pdf');
        }
  
}
