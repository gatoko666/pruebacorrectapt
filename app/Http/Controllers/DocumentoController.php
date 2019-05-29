<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documentos;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles([ 'admin','operador']);
        $operador=Auth::id();
        $detalledocumentos = Documentos::where('IdAdministrador', $operador)-> paginate(10);
        return view('subirdocumentos.listadodocumentos', compact('detalledocumentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subirdocumentos.agregardocumentos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /*
                // getting all of the post data
                $files = $request->file('fileToUpload');
                $destinationPath = 'uploads';
                
                // recorremos cada archivo y lo subimos individualmente
                foreach($files as $file) {
                    $filename = $file->getClientOriginalName();
                    $upload_success = $file->move($destinationPath, $filename);
                }
        
                // Demas codigo para crear producto
        
                return redirect()->to('product.index')->with('success', 'Archivos cargador éxitosamente');
*/

                   // $file = $request->file('file');
                  //  $nombre = $file->getClientOriginalName();
                   // \Storage::disk('local')->put($nombre,  \File::get($file));
                   // return "archivo guardado";

                   return redirect('documentos')->with('success','Documento  Agregado correctamente');


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
