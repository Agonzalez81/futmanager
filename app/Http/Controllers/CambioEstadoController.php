<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;  // Creo que obsoleto en Laravel 8

use Illuminate\Support\Facades\DB;       //Acceso a db
use Illuminate\Support\Facades\Storage;  //almacenar tmp csv

use Symfony\Component\HttpFoundation\Response;   //Respuestas



class CambioEstadoController extends Controller
{
    public function createCambioEstado(){

        return view('createCambioEstado');
    }
}
