<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documentos;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DocumentosController extends Controller
{
    public function index(Request $request)
        {

            $request->user()->authorizeRoles([ 'admin','operador']);
            $operador=Auth::id();
            $detalledocumentos = Documentos::where('IdAdministrador', $operador)-> paginate(10);
            return view('subirdocumentos.listadodocumentos', compact('detalledocumentos'));
   


         

            
         }


         public function create(){
            return view('subirdocumentos.indexsubirdocumentos');
        }


        public function store(Request $request) {
        
            $this->validate($request, [              
                'Descripcion' => 'required',
                'fileToUpload' => 'required|pdf',
            ]);
            $documento = new Documentos($request->input()) ;
         
             if($file = $request->hasFile('product_image')) {
                
                $file = $request->file('product_image') ;
                
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path().'/images/' ;
                $file->move($destinationPath,$fileName);
                $product->product_image = $fileName ;
            }
            $product->save() ;
             return redirect()->route('upload-files.index')
                            ->with('success','You have successfully uploaded your files');
        }






    
}
