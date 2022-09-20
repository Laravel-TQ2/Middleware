<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPublico extends Controller
{
    public function mostrar(Request $request){
        return view('publica');
    }
}
