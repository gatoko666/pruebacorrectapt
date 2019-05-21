<?php

namespace App\Http\Controllers;
use App\TiposDeTurnos;


use Illuminate\Http\Request;

class TiposDeTurnosController extends Controller
{
   
    public function index()
    {
        $detalletiposdeturnos = TiposDeTurnos:: paginate(10);                             
            return view('tiposdeturnos/indextipodeturnos', compact('detalletiposdeturnos'));
   
    }
    public function store(Request $request)
    {    
         
        $validatedData = $request->validate([
            'HoraInicioTurno' => 'required',
            'HoraTerminoTurno' => 'required',
            'AbreviacionTurno' => 'required',
            'DescripcionDetalleTipoTurno' => 'required|max:50',
            'IdTurnos' => '',  
        ]);     
        $detalletiposdeturnos = TiposDeTurnos::create($validatedData);                       
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
        TiposDeTurnos::whereId($IdDetalleTipoTurno)->update($validatedData);
        return redirect('tiposdeturnos')->with('success', 'Tipo de turno  is successfully updated');



          }



    


          public function destroy($IdDetalleTipoTurno)
          {
            TiposDeTurnos::where('IdDetalleTipoTurno',$IdDetalleTipoTurno)->delete();
      
              return redirect('tiposdeturnos')->with('success','Tipo de turno eliminado correctamente');       

          }












}
