<?php

namespace SisCombustible\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PilotoFormRequest extends FormRequest
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
        'Piloto' => ['required', 'string', 'max:255'],
        'Direccion' => ['required', 'string', 'max:255'],
        'Telefono' => ['required', 'numeric'],
      ];
    }
}
