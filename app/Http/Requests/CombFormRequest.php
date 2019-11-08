<?php

namespace SisCombustible\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CombFormRequest extends FormRequest
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
             'Nombre'=>'required|max:50',
             'Stock'=>'max:256',

         ];
     }
}
