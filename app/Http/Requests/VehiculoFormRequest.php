<?php

namespace SisCombustible\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoFormRequest extends FormRequest
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
          'Marca'=>'required|max:20',
          'NoPasajeros'=>'required|numeric',
          'Modelo'=>'required|max:20',
          'Placas'=>'required|max:20',
          'Color'=>'required|max:20',
          'Cilindros'=>'required|numeric',
          'Capacidad'=>'required|numeric',
          'Combustible'=>'required|max:20',
          'TResponsabilidad'=>'required|max:20',
          'NoMotor'=>'required|max:20',
          'NoChasis'=>'required|max:20',
          'CalVigente'=>'required',
          'IdentificadorOficial'=>'required',
          'PfAsignado'=>'required',
          'SVigente'=>'required',
          'KeyTuercas'=>'required',
          'Tricket'=>'required',
          'LlantaRepuesto'=>'required',

        ];

    }
}
