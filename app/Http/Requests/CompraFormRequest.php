<?php

namespace SisCombustible\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompraFormRequest extends FormRequest
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
          'Proveedor'=>'required',
          'Tipo_Comprobante'=>'required|max:2',
          'Serie_Comprobante'=>'required',
          'Numero_Comprobante'=>'required',
          'Fecha'=>'required',
          'idCombustible'=>'required',
          'FechaCompra'=>'required',
          'Cantidad'=>'required',
          'PrecioCompra'=>'required'

      ];
  }
}
