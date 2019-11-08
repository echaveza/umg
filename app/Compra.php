<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
  protected $table='compra';

  protected $primaryKey='idCompra';

  public $timestamps=false;

  protected $fillable = [
    'Proveedor',
    'Tipo_Comprobante',
    'Serie_Comprobante',
    'Numero_Comprobante',
    'Fecha',
    'Estado'
  ];
  protected $guarded = [

  ];
}
