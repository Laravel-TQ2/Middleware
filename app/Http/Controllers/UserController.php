<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function CrearUsuario(Request $request){
        User::create([
            'name' => $request -> post("usuario"),
            'email' => $request -> post("email"),
            'password' => Hash::make($request -> post("password"))
        ]);

        return view("crearUsuario",[ "usuarioCreado" => true]);
    }

    public function Login(Request $request){
        $credentials = $request -> only("name","password");
        if(!Auth::attempt($credentials))
            return view ("login",[ 'errorAutenticacion' => true]);
        
        return redirect('/private', 301); 
        



    }
}
