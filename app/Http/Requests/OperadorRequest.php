<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperadorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Correo' => 'required|email',  
            'NombreOperador' => 'required',  
            'Password' => 'required',
            'TelefonoOperador' => 'required|integer',            
            'NombreOperador' => 'required',
            'FechaAltaOperador' => '',
            'IdAdministrador' => '',
            'RutOperador' => 'required|cl_rut',
            'LocalizacionOperador' => 'required|max:10',
        ];
    }
}
