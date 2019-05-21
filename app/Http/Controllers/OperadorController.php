<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Operador;


class OperadorController extends Controller
{
    public function index()
                        {
                            $detalleoperador = Operador:: paginate(3);                                

                                return view('operadores/indexoperador', compact('detalleoperador'));
                       
                        }


                        public function store(Request $request)
                        {    
                        
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
                                'IdAdministrador' => '',
                                'RutOperador' => '',
                                'LocacionOperador' => '',   
                            ]);

                            $detalleoperador = Operador::create($validatedData);                       
                            return redirect('operadores')->with('success','Operador Agregado correctamente');
                                         
                        }



                        public function edit($IdOperador)
                        {
                            
                           $operador = Operador::findOrFail($IdOperador);

                           return view('operadores.edit', compact('operador'));
  
                        }



                        public function update(Request $request, Operador $operador)
                        {
                            $request->validate([
                                'NombreOperador' => 'required',
                                'ApellidoOperador' => 'required',
                                'Correo' => 'required',
                                'RutOperador' => 'required',
                                 
                            ]);
                            $operador->update($request->all());                           
                            return redirect('operadores')->with('success','Operador updated correctamente');       
                        
                              }


                              public function destroy($IdOperador)
                              {
                                Operador::where('IdOperador',$IdOperador)->delete();
                          
                                  return redirect('operadores')->with('success','Operador eliminado correctamente');       

                              }


}
