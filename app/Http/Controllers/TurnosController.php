<?php

namespace App\Http\Controllers;
use App\Operador;
use App\OperadorExterno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Turnos;
use App\TiposDeTurnos;

class TurnosController extends Controller
{/*
    public function index(Request $request)
    {

        $request->user()->authorizeRoles(['admin']);

        $operador=Auth::id();

        $detalletiposdeturnos = TiposDeTurnos::where('IdAdministrador', $operador)-> paginate(10);




        
                              
        return view('tiposdeturnos/indextipodeturnos', compact('detalletiposdeturnos'));

}*/



                                public function index(Request $request)
                                        {
                                            $request->user()->authorizeRoles([ 'admin']);
                                            $operador=Auth::id();
                                            $operadorexterno=Auth::id();
                                            $detalleoperador = Operador::where('IdAdministrador', $operador)-> paginate(100);
                                            $detalletiposdeturnos = TiposDeTurnos::where('IdAdministrador', $operador)-> paginate(100); 
                                            $detalleoperadorexterno = OperadorExterno::where('IdAdministrador', $operadorexterno)-> paginate(100);   


                                          
                                             return view('turnos.generarturnos', compact('detalleoperador','detalletiposdeturnos','detalleoperadorexterno'));

                                                    
                                        }









}
