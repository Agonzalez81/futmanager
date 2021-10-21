<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FileUploadController extends Controller
{
    public function index()
    {
        return view('file-upload');
    }

    public function store(Request $request)
    {

        print_r("Entra en store");
/*
        $validatedData = $request->validate([
            'file' => 'required|csv,txt|max:2048',
        ]);
*/


        /*
        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/files');
        */
        // Obtiene el contenido del fichero
        $contenido = $request->file('file')->getContent();
       // var_dump($contenido);  //string

        //$archivo = fopen("seguimientos.csv", "r");



/*
        $save = new File;

        $save->name = $name;
        $save->path = $path;

        return redirect('file-upload')->with('status', 'El fichero se ha subido correctamente');

*/
        return view('dashboard',['nombre','Luis Campos']);

    }

}
