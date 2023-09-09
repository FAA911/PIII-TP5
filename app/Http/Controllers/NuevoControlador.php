<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevoControlador extends Controller
{
    public function miFuncion()
    {
        return view('mi-vista');
    }
}