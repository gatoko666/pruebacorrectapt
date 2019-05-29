<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitudes;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SolicitudesController extends Controller
{
    
    
    public function index(Request $request)
    {
        $request->user()->authorizeRoles([ 'admin']);
      //  $operador=Auth::id();
         $detallesolicitud = Solicitudes:: paginate(10);                                

        return view('solicitudes.solicitarvacaciones', compact('detallesolicitud'));

    }




    








}
