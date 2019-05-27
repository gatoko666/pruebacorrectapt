<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperadorExternoRequest extends FormRequest
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
            'NombreOperadorEx' => 'required',  
            'Password' => 'required',
            'TelefonoOperadorEX' => 'required|integer',
            'EstadoCuentaOperadorEX' => 'required',
            'NombreOperadorEx' => 'required',
            'FechaAltaOperadorEX' => '',
            'IdAdministrador' => '',
            'RutOperadorExterno' => 'required|cl_rut',
            'LocalizacionExterno' => 'required|max:10',
        ];
    }
}
