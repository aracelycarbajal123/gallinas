<?php

namespace App\Http\Controllers;

use App\Models\Aves;
use Illuminate\Http\Request;

class AvesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aves=Aves::where('activo','si')->get();

        return view('aves.index',['Aves'=>$aves]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aves.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aves=Aves::create([
            'NombreAve'=>$request->NombreAve,
            'Activo'=>'SI',

        ]);
        return redirect()->route('aves');
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
        
        $aves=Aves::findorfail($id);
        return view('aves.edit', compact('aves'));
        
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
        $aves=Aves::findOrFail($id);
        $request->validate([
            'NombreAve'=>['string', 'max:255'],
            'Activo'=>['string'],

        ]);
        
        try{
            $aves->update($request->all());
            return redirect()->route('aves')
                    ->with('success', 'Ave Actualizada');
        }

        catch(\Throwable $th){
            return redirect()->route('aves')
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
        $aves=Aves::findOrFail($id);
        $aves->activo='no';
        $aves->save();

        return redirect()->route('aves')
            ->with('success', 'Ave Eliminada Correctamente');

    
        
    }
}
