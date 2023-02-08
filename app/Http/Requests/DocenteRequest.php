<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocenteRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email:dns',
            'apellido_Paterno' => 'required',
            'apellido_Materno' => 'required',
            'telefono' => 'required',
            'telefono_Emergencia' => 'required',
            'grado_Academico' => 'required',
            'especialidad' => 'required',
            'sub_Especialidad' => 'required',
            'horas_x_Mes' => 'required',
            'enfermedades_Patologicas' => 'required',
            'tipo_Rol' => 'required',
        ];
    }
}
