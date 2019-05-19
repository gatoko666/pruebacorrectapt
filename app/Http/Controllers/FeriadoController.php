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



        /*
        $request->validate([
            'FechaDiaFeriado' => 'required',
            'DescripcionFeriado' => 'required|max:255',
            'TipoDetalleEspecial' => 'required|max:2',
            'RepetirFeriado' => 'required|max:2',
        ]);
  
        Feriado::create($request->all());   
        return redirect('feriados')->with('success','Feriado Agregado correctamente');

            */
    }



                    public function edit($IdDetalleFeriado)
                            {
                               // $detalleferiado = Feriado::findOrFail($IdDetalleFeriado);

                               // return view('feriados', compact('book'));

                               $feriado = Feriado::findOrFail($IdDetalleFeriado);

                               return view('feriados.edit', compact('feriado'));

                             //  return redirect('editarferiado')->with('success','Feriado editado correctamente');       



                            }

/*
                        public function destroy($IdDetalleFeriado)
                                {
                                    $detalleferiado = Feriado::findOrFail($IdDetalleFeriado);
                                    $detalleferiado->delete();

                                    return redirect('feriados')->with('success', 'Feriado eliminado correctamente');
                                }

                                public function destroy($id)
                                {
                                    $detalleferiado = Feriado::findOrFail($id);
                                    $detalleferiado->delete();
                            
                                    return redirect('feriados')->with('success', 'Feriado is successfully deleted');
                                }
                                */ 

/*
                                public function destroy($id)
                                {
                                    $detalleferiado = Feriado::findOrFail($IdDetalleFeriado);
                                    $detalleferiado->delete();
                              
                                    return redirect()->route('feriados')
                                                    ->with('success','Feriado is successfully deleted');
                                }
*/                              /*
                                public function destroy(Request $request, Feriado $feriado)
                                {
                                    $feriado->delete();
                                    $request->session()->flash('message', 'Successfully deleted the feriado!');
                                    return redirect('feriados');
                                }
                                            */

                                public function destroy($idDetalleFeriado)
                                    {
                                        Feriado::where('idDetalleFeriado',$idDetalleFeriado)->delete();
                                
                                        return redirect('feriados')->with('success','Feriado eliminado correctamente');       

                                    }


                                        public function update(Request $request, Feriado $feriado)


                                                {

                                                    $request->validate([
                                                        'FechaDiaFeriado' => 'required',
                                                        'DescripcionFeriado' => 'required|max:255',
                                                    ]);

                                                    $feriado->update($request->all());
                                                   
                                                    
                                                    return redirect()->route('feriados')
                                                    ->with('success','Product updated successfully');


                                                      }







}
