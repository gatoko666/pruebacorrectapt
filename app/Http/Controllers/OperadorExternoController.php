<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\OperadorExterno;

class OperadorExternoController extends Controller
{
    public function index()
    {
        $detalleoperadorexterno = OperadorExterno:: paginate(10);                                

            return view('operadoresexternos/indexoperadorexterno', compact('detalleoperadorexterno'));
   
    }


    public function store(Request $request)
    {    
    
        $validatedData = $request->validate([
            'NombreOperadorEx' => 'required',
            'ApellidoOperadorEX' => 'required',
            'Password' => 'required',
            'Correo' => 'required',
            'TelefonoOperadorEX' => '',            
            'EstadoCuentaOperadorEX' => 'required',
            'FechaAltaOperadorEX' => '',
            'FechaBajaOperadorEX' => '',
            'IdAdministrador' => '',
            'RutOperadorExterno' => '',
            'LocalizacionExterno' => '',   
        ]);

        $detalleoperadorexterno = OperadorExterno::create($validatedData);                       
        return redirect('operadorexternos')->with('success','Operador Agregado correctamente');
                     
    }



    public function edit($IdOperadorExterno)
    {
        
       $operadorexterno = OperadorExterno::findOrFail($IdOperadorExterno);

       return view('operadorexternos.edit', compact('operadorexternos'));

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
        return redirect('operadorexternos')->with('success','Operador updated correctamente');       
    
          }


          public function destroy($IdOperadorExterno)
          {
            OperadorExterno::where('IdOperadorExterno',$IdOperadorExterno)->delete();
      
              return redirect('operadorexternos')->with('success','Operador Externo eliminado correctamente');       

          }


}
