<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    
    public function index(){

        if (auth()->user()) {
            return redirect()->route('dashboard');

        }
        return view('login');
    }
    public function viewRegister(){

        return view('register');
    }


    public function register(){

        if(!auth()->user()){
            return view('auth.register');

        }
        if(auth()->user()->rol =='admin'|| auth()->user()->rol=='digitador'||auth()->user()->rol=='beneficiario' ){
            return redirect()->route('dashboard');
        }
        
        
    }
//regisgrar un usuario
    public function store(Request $request){

       $request->validate([
            'name' => 'required|min:5',
            'password' => 'required|min:5',
            'password'=>'confirmed',
            'email'=>'unique:users',
            'username'=>'required|min:5|unique:users'

          
        ], [
            'name.required' => 'El Nombre es requerido.',
            'password.required' => 'Password es requerido.',
            'email.required' => 'Email es requerido.',
            'email.email' => 'Direccion de email no es correcto.',
            'password.min'=>'El password debe de tener minimo 5 caracteres',
            'password.confirmed'=>'El password no coincide',
            'email.unique'=>'El email esta en uso',
            'username.required'=>'El nombre de usuario es requerido',
            'username.min'=>'El usuario debe de tener minimo 5 caracteres',
            'username.unique'=>'El nombre de usuario esta en uso',


        ]);

        User::create([
            'name'=>str::upper($request->name),
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'username'=>$request->username,

        ]);

        Auth::attempt($request->only('email','password'));
        return redirect()->route('dashboard');

    }

    //muestra o redirige al dashboard
    public function dashboard(){
        return view('layouts.app');
    }

    //cierra sesion
    public function logout(){

        auth()->logout();

        return redirect()->route('login');
    }

    //metodo para el login
    public function autenticar(Request $request){
        $request->validate([
       
            'password' => 'required',
            'email'=>'required'
          
            
        ], [
          
            'password.required' => 'Password es requerido.',
            'email.required' => 'Email es requerido.',
        ]);

        if(!auth()->attempt($request->only('email','password'))){

            return back()->with('msg','Credenciales Incorrectas');
        }

        if (auth()->user()->username=='admin2') {
            return back()->with('msg','te llevara a una vista admin');
            
        }else{
            return back()->with('msg','te llevara a una vista digitador');

        }
           
        
    }
}