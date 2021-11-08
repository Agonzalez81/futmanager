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
        $comment_old = $request->file('file')->getClientOriginalName();
        $comment = $comment_old + file('new_comment')
        
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
