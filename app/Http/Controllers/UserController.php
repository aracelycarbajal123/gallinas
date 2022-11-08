<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::where('Activo', 'si')->get();

        return view('users.index',['users'=>$users]);
    }


   /* public function dashboard()
    {
        if(auth()->user()){
            $users=User::all();
            return view('dashboard');

        }else{
            return view('auth.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'rol'=>['required'],
                ]
            );
      
            
             $user=User::create([
                'name' => $request->name,
                'username'=>$request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'rol'=>$request->rol,
                'Activo'=> "si",                
            ]);
    return redirect()->route('users')->with('success', 'creado correctament!s');
            

        } catch (\Throwable $th) {
            
    return redirect()->route('users')->with('error', $th);

        }
    

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
        $user=User::findorfail($id);

        return view('users.edit', compact('user'));
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
        $user=User::findOrFail($id);

      //  dd($user);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'email_verified_at' => [ 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
          
              
        ]);

        try {
          //  dd($request);
          //  $user->update($request->all());
          $user->name=$request->name;
          $user->username=$request->username;
          $user->email=$request->email;
          $user->password=Hash::make($request->password);
          $user->Activo='si';
          $user->save();

            return redirect()->route('users')
                        ->with('success', 'Usuario Actualizado');
        } catch (\Throwable $th) {
            return redirect()->route('users')
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
        $user=User::findOrFail($id);
        $user->activo='no';
        $user->save();

        return redirect()->route('users')
                        ->with('success', 'Usuario eliminado Satisfactoriamente!');
    }
    
}
