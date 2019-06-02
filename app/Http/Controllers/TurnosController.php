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
use App\Event;
use Calendar;
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
                                            $detalleoperadorexterno = OperadorExterno::where('IdAdministrador', $operadorexterno)-> paginate(100);   

                                            $events = [];
                                            $data = Event::all();
                                            if($data->count())
                                             {
                                                foreach ($data as $key => $value) 
                                                {
                                                    $events[] = Calendar::event(
                                                        $value->title,
                                                        true,
                                                        new \DateTime($value->start_date),
                                                        new \DateTime($value->end_date.'+1 day'),
                                                        null,
                                                        // Add color
                                                     [
                                                         
                                                     ]
                                                    );
                                                }
                                            }
                                            $calendar = Calendar::addEvents($events);
                                               // dd($calendar);

                                            View::share('calendar');

                                           
                                          
                                             return view('turnos.generarturnos', compact('detalleoperador','detalletiposdeturnos','detalleoperadorexterno','calendar'));

                                                    
                                        }



                        public function store(Request $request){        
                        
                         // $data=$request->all();

                         $IdAdministrador=Auth::id();
                         
                          
                        // $IdAdministrador->IdAdministrador=Auth::id();

                    //  dd($request->all());
                   // $data=$request->all();
                  //  $lastid=TurnoAsignado::create($data)->id;


 /*
                  $idobject=TurnoAsignado::findOrFail('NombreTrabajador',
                  'NumeroSemana','MesDeLaSemanaAsignado',
                  'AnoDeLaSemanaAsignado'
                  ,$request->NombreTrabajadori, $request->NumeroSemana,$request->MesDeLaSemanaAsignado,$request->AnoDeLaSemanaAsignado)->first();
*/
                         
                     // dd( $idobject);


                   


                        if(count($request->NombreTrabajadori) > 0)
                        {
                        foreach($request->NombreTrabajadori as $trabajador=>$t){
                         // dd($trabajador);


                            $data2=array(

                             // 'id'=>$lastid,
                                'NombreTrabajador'=>$request->NombreTrabajadori[$trabajador],
                                'NumeroSemana'=>$request->NumeroSemana,
                                'MesDeLaSemanaAsignado'=>$request->MesDeLaSemanaAsignado,
                                'AnoDeLaSemanaAsignado'=>$request->AnoDeLaSemanaAsignado,                                
                                'nombreturnol'=>$request->nombreturnol[$trabajador],
                                'nombreturnom'=>$request->nombreturnom[$trabajador],
                                'nombreturnomm'=>$request->nombreturnomm[$trabajador],
                                'nombreturnoj'=>$request->nombreturnoj[$trabajador],
                                'nombreturnov'=>$request->nombreturnov[$trabajador],
                                'nombreturnos'=>$request->nombreturnos[$trabajador],
                                'nombreturnod'=>$request->nombreturnod[$trabajador],
                                'IdAdministrador'=>$IdAdministrador ,

                                 
                                                              
                            );  
                            
                            
                            
                            TurnoAsignado::insert($data2); 

                   // dd($data2);
                  
                    /*
                   if (count($idobject) > 0 ) {
                    TurnoAsignado::update($data2); 
                    return redirect()->back()->with('success','data insert successfully');

                   }else {
                   
                    TurnoAsignado::insert($data2); 
                    return redirect()->back()->with('success','data insert successfully');
                   } 

                   */
                          
                        //TurnoAsignado::firstOrCreate($data2);                            

                      }
                        }                  

                        return redirect()->back()->with('success','data insert successfully');




                        
                        
                         

                       





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




                                                      
                        //   return redirect('generarturnos')->with('success','Turno  Agregado correctamente');

                        }




                        public function turnospresentes(Request $request)
                              {

                                  $request->user()->authorizeRoles([ 'admin']);

                                  $operador=Auth::id();

                                  $turnospresentes = TurnoAsignado::where('IdAdministrador', $operador)-> paginate(10);   
                                          
                                                        
                                  return view('turnos.turnos', compact('turnospresentes'));

                                  
                        
                          }





                          












}
