<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Operador;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Requests\OperadorRequest;



class OperadorController extends Controller
{
    public function index(Request $request)
        {
            $request->user()->authorizeRoles([ 'admin']);
            $operador=Auth::id();
            $detalleoperador = Operador::where('IdAdministrador', $operador)-> paginate(100);
                           // $detalleoperador = Operador:: paginate(10);                  
                                return view('operadores/indexoperador', compact('detalleoperador'));                       
                        }


                        


                        public function store(OperadorRequest $request)
                        {    
                        

                              // Validate the request...

                          /*  $flight = new Flight;

                            $flight->name = $request->name;

                            $flight->save();

                            $mytime = Carbon\Carbon::now();
                            echo $mytime->toDateTimeString();



                        */ 
                      //  $mytime = Carbon\Carbon::now();
                    //    echo $mytime->toDateTimeString(); 
                       
                  //  $user->deleted_at = now();
                               /*
                                    $validatedData = $request->validate([
                               
                                      'Correo' => 'required|email',                                   
                                      
                                  ]);
                              */
                              $validated = $request->validated();
                              // $request->all();        

                                $operador= new Operador;
                                $operador->NombreOperador=$request->NombreOperador;                                
                                $operador->RutOperador=$request->RutOperador;      
                                $operador->Correo=$request->Correo;
                                $operador->TelefonoOperador=$request->TelefonoOperador;                               
                                $operador->FechaAltaOperador=now();
                                $operador->Password=$request->Password;
                                $operador->IdAdministrador=Auth::id();
                                $operador->RutOperador=$request->RutOperador;
                                $operador->LocalizacionOperador=$request->LocalizacionOperador;
                             //  dd($operador);
                                $operador->save();

                              //  dd($operador);
        
                                 /*   
                            $validatedData = $request->validate([
                                'NombreOperador' => 'required',
                                'ApellidoOperador' => 'required',
                                'Password' => 'required',
                                'Correo' => 'required',
                                'TelefonoOperador' => '',
                                'ImagenPerfilOperador' => '',
                                'EstadoCuentaOperador' => 'required',
                                'FechaAltaOperador' => '',
                                'FechaBajaOperador' => '',
                                'IdAdministrador' => 'Auth::id',
                                'RutOperador' => '',
                                'LocacionOperador' => '',  
                                
                            ]);
*/


                            //dd($validatedData);

                          //  $detalleoperador = Operador::create($validatedData);   


                                                
                            return redirect('operadores')->with('success','Operador Agregado correctamente');
                                         
                        }



                        public function edit($IdOperador)
                        {
                            
                           $operador = Operador::findOrFail($IdOperador);
                    
                           return view('operadores.editartrabajadores', compact('operador'));
                    
                        }
                        

                        public function update(Request $request,  $RutOperador)
                        {       
                          
                            $validatedData = $request->validate([
                                'NombreOperador' => 'required',                               
                                'Correo' => 'required',
                                'LocacionOperador' => 'required',
                                'EstadoCuentaOperador' => '',

                            ]);
                            Operador::where('RutOperador', $RutOperador)->update($validatedData);
                            return redirect('operadores')->with('success', 'Operador Externo  es actualizado correctamente');
                              }

                              


 


                              public function destroy($RutOperador)
                              {
                                Operador::where('RutOperador',$IdOperador)->delete();
                          
                                  return redirect('operadores')->with('success','Operador eliminado correctamente');       

                              }


}
