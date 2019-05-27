<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Operador;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    
    

    

    public function index(Request $request)
    {
        $request->user()->authorizeRoles([ 'admin']);
        $operador=Auth::id();



       // $flight = App\Flight::where('number', 'FR 900')->first();


       //$flight = App\Flight::find(1);

       // $flights = App\Flight::find([1, 2, 3]);

       



        $detalleoperador = Operador::where('IdAdministrador', $operador)-> paginate(10);
                       // $detalleoperador = Operador:: paginate(10);                  
                            return view('operadores/indexoperador', compact('detalleoperador'));                       
                    }


                    //SELECT COUNT(IdOperador) FROM operador

}
