<?php

namespace App\Http\Controllers;

use App\Models\Comunidad;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ComunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunidades=Comunidad::where('estado','activo')->get();
        

        return view('comunidad.index',['comunidades'=>$comunidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('comunidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'localizacion' => 'required',
           

          
        ], [
            'name.required' => 'El Nombre es requerido.',
            'localizacion.required' => 'Localizacion es requerido.'

        ]);

        $comunidad=Comunidad::create([
            'nombre'=>str::upper($request->nombre),
            'localizacion'=>$request->localizacion,
            'estado'=>'activo'
           

        ]);
        return redirect()->route('comunidades');



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

        $comunidad=Comunidad::findorfail($id);
        return view('comunidad.edit', compact('comunidad'));
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
        $comunidad=Comunidad::findOrFail($id);

        $request->validate([

            'nombre'=>['required','string', 'max:55'],
            'localizacion'=>['required', 'string'],
           
        ]);

        try{
            $comunidad->update($request->all());
            return redirect()->route('comunidades')
                    ->with('success', 'Comunidad Actualizada');
            
        }
        catch(\Throwable $th){
            return redirect()->route('comunidad')
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
        $comunidad=Comunidad::findOrFail($id);
        $comunidad->estado='no';
        $comunidad->save();


        return redirect()->route('comunidades')
                    ->with('success', 'Comunidad Eliminada Correctamente');

                 
    }
}
