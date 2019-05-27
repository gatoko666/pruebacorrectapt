<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function index(Request $request)
        {

            $request->user()->authorizeRoles([ 'admin','operador']);

            $operador=Auth::id();

            $detalletiposdeturnos = TiposDeTurnos::where('IdAdministrador', $operador)-> paginate(10);




            
                                  
            return view('tiposdeturnos/indextipodeturnos', compact('detalletiposdeturnos'));
   
    }










    
}
