<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrivado extends Controller
{
    public function mostrarPrivado(Request $request){
        return view('privada');
    }
}
