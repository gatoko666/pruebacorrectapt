<?php

namespace App\Http\Controllers;
use App\Operador;
use App\OperadorExterno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Turnos;
use App\TiposDeTurnos;
use App\TurnoDiaAsignado;
use App\OperadorConTurno;
use App\Operador_Turno;

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
                                            $detalleoperadorexterno = OperadorExterno::where('IdAdministrador', $operadorexterno)-> paginate(100);   


                                          
                                             return view('turnos.generarturnos', compact('detalleoperador','detalletiposdeturnos','detalleoperadorexterno'));

                                                    
                                        }



                        public function store(Request $request){



                           // $validated = $request->validated();
                           
                           
                            //dd($TurnoDiaAsignado);
                            //dd($TurnoDiaAsignado);
                            $OperadorConTurno= new OperadorConTurno;
                          // dd($request->NombreTrabajador);
                            $NombreTrabajador=$request->NombreTrabajador;

                            $IdAdministrador->IdAdministrador=Auth::id();
                            //dd($request->NombreTrabajador);
                            $OperadorConTurno->save();


                           // dd($request->DiaDeLaSemanaAsignado);
                            $TurnoDiaAsignado= new TurnoDiaAsignado;
                            $DiaDeLaSemanaAsignado->DiaDeLaSemanaAsignado=$request->DiaDeLaSemanaAsignado;
                            $MesDeLaSemanaAsignado="Junio";
                            $AnoDeLaSemanaAsignado="2019";  
                            //dd($TurnoDiaAsignado);                           
                            $TurnoDiaAsignado->save();


                            $Operador_Turno= new Operador_Turno;                              
                            $TurnoDiaAsignado = TurnoDiaAsignado::findOrFail($IdTurnoDiaAsignado);
                            $OperadorConTurno = OperadorConTurno::findOrFail($IdOperadorConTurno);  


                            $IdOperadorConTurno=$IdOperadorConTurno->TurnoDiaAsignado;
                            $IdTurnoDiaAsignado=$IdTurnoDiaAsignado->OperadorConTurno;  
                           // dd($Operador_Turno); 
                             $Operador_Turno->save();


                            // $detalleoperador = Operador::create($validatedData);                                 
                           return redirect('generarturnos')->with('success','Turno  Agregado correctamente');








                        }

















}
