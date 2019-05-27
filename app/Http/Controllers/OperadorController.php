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
            $detalleoperador = Operador::where('IdAdministrador', $operador)-> paginate(10);
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
                                $operador->Password=$request->Password;
                                $operador->Correo=$request->Correo;
                                $operador->TelefonoOperador=$request->TelefonoOperador;
                                $operador->EstadoCuentaOperador=$request->EstadoCuentaOperador;
                                $operador->FechaAltaOperador=now();
                                $operador->FechaBajaOperador=$request->FechaBajaOperador;
                                $operador->IdAdministrador=Auth::id();
                                $operador->RutOperador=$request->RutOperador;
                                $operador->LocacionOperador=$request->LocacionOperador;
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
                        

                        public function update(Request $request,  $IdOperador)
                        {       
                          
                            $validatedData = $request->validate([
                                'NombreOperador' => 'required',                               
                                'Correo' => 'required',
                                'LocacionOperador' => 'required',
                                'EstadoCuentaOperador' => '',

                            ]);
                            Operador::where('IdOperador', $IdOperador)->update($validatedData);
                            return redirect('operadores')->with('success', 'Operador Externo  es actualizado correctamente');
                              }

                              


 


                              public function destroy($IdOperador)
                              {
                                Operador::where('IdOperador',$IdOperador)->delete();
                          
                                  return redirect('operadores')->with('success','Operador eliminado correctamente');       

                              }


}
