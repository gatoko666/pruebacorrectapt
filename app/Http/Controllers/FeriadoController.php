<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feriado;


class FeriadoController extends Controller
{
    
    

    public function index()
        {
            $detalleferiado = Feriado:: paginate(10);
            //dd($detalleferiado);             
                return view('feriados/indexferiado', compact('detalleferiado'));
        // $detalleferiado = Feriado::latest()->paginate(5);
        // return view('feriados/indexferiado',compact('detalleferiado'))
//->with('i', (request()->input('page', 1) - 1) * 5);
                        /*Testetar
                     $products = Product::latest()->paginate(5);  
                        return view('products.index',compact('products'))
                            ->with('i', (request()->input('page', 1) - 1) * 5);

                        */

                        /*
                                mas pruebas
                        $users = DB::table('users')->paginate(15);

                        return view('user.index', ['users' => $users]);
                            */


        }






    public function store(Request $request)
    {    
    
        $validatedData = $request->validate([
            'FechaDiaFeriado' => 'required',
            'DescripcionFeriado' => 'required|max:255',
            'TipoDetalleEspecial' => 'required|max:2',
            'RepetirFeriado' => 'required|max:2',
        ]);
        $detalleferiado = Feriado::create($validatedData);
   
        return redirect('feriados')->with('success','Feriado Agregado correctamente');


 
    }

                    public function edit($IdDetalleFeriado)
                    {
                        
                    $feriado = Feriado::findOrFail($IdDetalleFeriado);

                    return view('feriados.editarferiado', compact('feriado'));

                    }

 

                                public function destroy($idDetalleFeriado)
                                    {
                                        Feriado::where('idDetalleFeriado',$idDetalleFeriado)->delete();
                                
                                        return redirect('feriados')->with('success','Feriado eliminado correctamente');       

                                    }


                                    public function update(Request $request,$idDetalleFeriado)
                                    {       
                                      
                                        $validatedData = $request->validate([
                                            'FechaDiaFeriado' => '',
                                            'DescripcionFeriado' => '',
                                            'TipoDetalleEspecial' => '',
                                            'RepetirFeriado' => '',
                                        ]);
                                        Feriado::where('idDetalleFeriado', $idDetalleFeriado)->update($validatedData);
                                        return redirect('feriados')->with('success', 'Feriado  is successfully updated');
                                          }





}
