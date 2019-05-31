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
use App\TurnoAsignado;
use Illuminate\Support\Arr;


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
                        
                         // $data=$request->all();



                          

                    //  dd($request->all());
                        
                    // dd( (count($request->NombreTrabajadori) ));
                        if(count($request->NombreTrabajadori) > 0)
                        {
                        foreach($request->NombreTrabajadori as $trabajador=>$t){
                         // dd($trabajador);
                            $data2=array(
                                 
                                'NombreTrabajador'=>$request->NombreTrabajadori[$trabajador],
                            
                                'NombreTurno'=>$request->nombreturnol[$trabajador],
                                'NombreTurno'=>$request->nombreturnom[$trabajador],
                                'NombreTurno'=>$request->nombreturnomm[$trabajador],
                                'NombreTurno'=>$request->nombreturnoj[$trabajador],
                                'NombreTurno'=>$request->nombreturnov[$trabajador],
                                'NombreTurno'=>$request->nombreturnos[$trabajador],
                                'NombreTurno'=>$request->nombreturnod[$trabajador],
                                                              
                            );                             
                  dd($data2);
                        TurnoAsignado::insert($data2);                             

                      }
                        }                  

                        return redirect()->back()->with('success','data insert successfully');




                        
                        
                         

                         
                           for ($i = 1; $i <= 7; $i++) {
                                      for ($i = 1; $i <= 7; $i++) {


                                          

                                      
                                      
                                      }                           

                              }







                           // $OperadorConTurno= new OperadorConTurno;                          
                         //   $OperadorConTurno=$request->NombreTrabajador;   
                        //    $OperadorConTurno->IdAdministrador=Auth::id();   
 

                           /*
                        $operador=Auth::id(); 
                        dd($request->NombreTrabajadori);


                        $detalleoperador = Operador::where('IdAdministrador', $operador)-> paginate(100);

                        $OperadorConTurno= new OperadorConTurno;
                            foreach ($detalleoperador as $op ) {
                             
                                                        
                            $OperadorConTurno=$request->NombreTrabajador;   
                            $OperadorConTurno->IdAdministrador=Auth::id();     
                              
                            $OperadorConTurno->save();

                            }
*/
                            




                                                 
                          //  dd($OperadorConTurno);
                       //  $OperadorConTurno->save();
 
/*
                           $dataSet = [];
                           foreach ($OperadorConTurno as $OpCT) {
                               $dataSet[] = [
                                   'NombreTrabajador'  => $NombreTrabajador=$request->NombreTrabajador,
                                   'IdAdministrador'    => $IdAdministrador->IdAdministrador=Auth::id(),
                                 
                               ];
                           }
                           
                           DB::table('operadorconturno')->insert($dataSet);

*/




                                                      
                           return redirect('generarturnos')->with('success','Turno  Agregado correctamente');

                        }

















}
