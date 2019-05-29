<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Validator;
use Redirect;
use View;



class imageController extends Controller
{
    public function multiplefileupload(Request $request)
    {
    $images=array();
    if($files=$request->file('images')){
    foreach($files as $file){
    $name=$file->getClientOriginalName();
    $file->move('image',$name);
    $images[]=$name;
    /*Insert your data*/
    DB::table('documentos')->insert([
    'RutaDocumento' => $name
    ]);

    /*Insert your data*/
    }
    }
    return redirect()->back()->with('message', 'Successfully Save Your Image file.');
    }
    
    }
