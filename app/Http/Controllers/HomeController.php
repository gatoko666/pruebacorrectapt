<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*
    public function index()
    {
        return view('/index');
    }
    */
    
                //funcion para saber quien logea
                public function index(Request $request)
                {
                    $request->user()->authorizeRoles(['user', 'admin']);
                    
                    return view('/index');
                }


}
