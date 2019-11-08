<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
  protected $table='detalle_compra';

  protected $primaryKey='idDetalle_Compra';

  public $timestamps=false;

  protected $fillable = [
    'idCompra',
    'idCombustible',
    'FechaCompra',
    'Cantidad',
    'PrecioCompra',
    'Estado'
  ];
  protected $guarded = [

  ];
}
