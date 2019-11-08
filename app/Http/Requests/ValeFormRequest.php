<?php

namespace SisCombustible\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValeFormRequest extends FormRequest
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
             'NoOrdenPedido'=>'required',
             'Fecha'=>'date',
             'Cantidad'=>'required',
             'Descripcion'=>'required',
             'Importe'=>'required',
             'Total'=>'required',


         ];
     }
}
