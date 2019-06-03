<?php

namespace App\Http\Controllers;
use App\Operador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use App\TiposDeTurnos;
use Illuminate\Support\Facades\DB;

 
use App\TurnoRegistroAsignado;

use Illuminate\Support\Facades\View;






class TurnosController extends Controller
{/*    public function index(Request $request)
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
                                        
                                           
                                          
                                             return view('turnos.generarturnos', compact('detalleoperador','detalletiposdeturnos',));

                                                    
                                        }



                        public function store(Request $request){   
                            $operador=Auth::id();      
                         //   $rutOperador=Operador::where('IdAdministrador', $operador);
                          $iddetalletipoturno=TiposDeTurnos::where('IdAdministrador', $operador) ;                         
                         $IdAdministrador=16;           

                        if(count($request->NombreTrabajadori) > 0)
                        {
                        foreach($request->NombreTrabajadori as $trabajador=>$t){
                         // dd($trabajador);
                            $data2=array(

                             // 'id'=>$lastid,
                              

                              
                             // 'RutOperador'=>$request->RutOperador[$trabajador],
                             

                            // 'NombreTrabajador'=>$request->NombreTrabajadori[$trabajador],
                          //  'idDetalleTipoTurno'=>$IdAdministrador ,
                                'RutOperador'=>$request->RutTrabajadori[$trabajador],
                                'fechacreacion'=>now(),                                                 
                                'nombreturnol'=>$request->nombreturnol[$trabajador],
                                'nombreturnom'=>$request->nombreturnom[$trabajador],
                                'nombreturnomm'=>$request->nombreturnomm[$trabajador],
                                'nombreturnoj'=>$request->nombreturnoj[$trabajador],
                                'nombreturnov'=>$request->nombreturnov[$trabajador],
                                'nombreturnos'=>$request->nombreturnos[$trabajador],
                                'nombreturnod'=>$request->nombreturnod[$trabajador],
                                'NumeroSemana'=>$request->NumeroSemana,
                                'MesDeLaSemanaAsignado'=>$request->MesDeLaSemanaAsignado,
                                'AnoDeLaSemanaAsignado'=>$request->AnoDeLaSemanaAsignado,              
                                                      
                                                             
                            );      
                          // dd($data2);                 
                            TurnoRegistroAsignado::insert($data2); 
                                 
                      }
                        }                  

                        return redirect()->back()->with('success','data insert successfully');
            }




                        public function turnospresentes(Request $request)
                              {

                                  $request->user()->authorizeRoles([ 'admin']);

                                  $IdAAdministrador=Auth::id();

                             //     $detalleoperador = Operador::where('IdAdministrador', $IdAdministrador)-> paginate(100);

                             


                              //    $turnospresentes = TurnoRegistroAsignado::where('RutOperador', $detalleoperador)-> paginate(10); 
                              
                              $operadorpresente =DB::table('operador')
                              ->join('users', 'operador.IdAdministrador', '=', 'users.id')                          
                              ->where('IdAdministrador', '=',$IdAAdministrador )
                              ->select('RutOperador')
                              ->get();




                                  //    dd($turnospresentes);

                                     $turnospresentes = TurnoRegistroAsignado::where('RutOperador',   $operadorpresente  )-> paginate(100);

                                     // dd($turnospresentes);

                                  return view('turnos.turnos', compact('turnospresentes'));

                                  
                        
                          }





                          












}
