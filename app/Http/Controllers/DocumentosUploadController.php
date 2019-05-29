<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Documentos;
use Illuminate\Support\Facades\Auth;


class DocumentosUploadController extends Controller
{
    public function index(Request $request)
    {

        $request->user()->authorizeRoles([ 'admin','operador']);
        $operador=Auth::id();
        $detalledocumentos = Documentos::where('IdAdministrador', $operador)-> paginate(10);
        return view('subirdocumentos.indexsubirdocumentos', compact('detalledocumentos'));

     }



         public function store(Request $request)
                    {
                    $file = $request->file('fileToUpload');

                    dd($file);
                   


                      //obtenemos el campo file definido en el formulario
                        //$file = $request->file('file');
                    
                        //obtenemos el nombre del archivo
                       // $nombre = $file->getClientOriginalName();
                    
                        //indicamos que queremos guardar un nuevo archivo en el disco local
                        \Storage::disk('local')->put($nombre,  \File::get($file));
                    
                      //  return "archivo guardado";

                    }



}
