<?php

namespace SisCombustible\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudVehiculoFormRequest extends FormRequest
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
        'FechaSolicitud'=>'required',
        'Unidad'=>'required',
        'Duracion'=>'required',
        'Objetivo'=>'required',
        'Responsable'=>'required',
        'Telefono'=>'required|max:8',
        'NoPersonas'=>'required|max:4',
        'Destino'=>'required',
        'FechaIni'=>'required',
        'FechaFin'=>'required',
        'HoraSalida'=>'required',
        'Kilometraje'=>'required',

      ];
    }
}
