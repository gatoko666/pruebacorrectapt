<?php

namespace App\Http\Controllers;
use App\TiposDeTurnos;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


use Illuminate\Http\Request;

class TiposDeTurnosController extends Controller
{
   
    public function index(Request $request)
        {

            $request->user()->authorizeRoles([ 'admin']);

            $operador=Auth::id();

            $detalletiposdeturnos = TiposDeTurnos::where('IdAdministrador', $operador)-> paginate(10);           
                                  
            return view('tiposdeturnos/indextipodeturnos', compact('detalletiposdeturnos'));
   
    }
    public function store(Request $request)
    {    

     
     //  dd($operador);
        

        $tipodeturno= new TiposDeTurnos;
        $tipodeturno->AbreviacionTurno=$request->AbreviacionTurno;
        $tipodeturno->DescripcionDetalleTipoTurno=$request->DescripcionDetalleTipoTurno;
        $tipodeturno->HoraInicioTurno=$request->HoraInicioTurno;
        $tipodeturno->HoraTerminoTurno=$request->HoraTerminoTurno;
        $tipodeturno->IdAdministrador=Auth::id();


        $tipodeturno->save();

         /*
        $validatedData = $request->validate([
            'HoraInicioTurno' => 'required',
            'HoraTerminoTurno' => 'required',
            'AbreviacionTurno' => 'required',
            'DescripcionDetalleTipoTurno' => 'required|max:50',
            'IdTurnos' => '',  
        ]);     
        $detalletiposdeturnos = TiposDeTurnos::create($validatedData);       
*/    
                //dd($request->AbreviacionTurno);
               return redirect('tiposdeturnos')->with('success','Tipo de turno  Agregado correctamente');
                    
    }
    public function edit($IdDetalleTipoTurno)
    {        
       $detalletiposdeturnos = TiposDeTurnos::findOrFail($IdDetalleTipoTurno);
       return view('tiposdeturnos.edit', compact('detalletiposdeturnos'));

    }



    public function update(Request $request,  $IdDetalleTipoTurno)
    {       
      
        $validatedData = $request->validate([
            'HoraInicioTurno' => 'required',
            'HoraTerminoTurno' => 'required',
            'AbreviacionTurno' => 'required',
            'DescripcionDetalleTipoTurno' => 'required|max:50',
            'IdTurnos' => '',  
        ]);
        TiposDeTurnos::where('IdDetalleTipoTurno', $IdDetalleTipoTurno)->update($validatedData);
        return redirect('tiposdeturnos')->with('success', 'Tipo de turno  is successfully updated');
          }



    


          public function destroy($IdDetalleTipoTurno)
          {
            TiposDeTurnos::where('IdDetalleTipoTurno',$IdDetalleTipoTurno)->delete();
      
              return redirect('tiposdeturnos')->with('success','Tipo de turno eliminado correctamente');       

          }












}
