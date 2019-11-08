<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;

class Vale extends Model
{
  protected $table='vale';

  protected $primaryKey='idVale';

  public $timestamps=false;

  protected $fillable = [
    'NoOrdenPedido',
    'Fecha',
    'Cantidad',
    'Descripcion',
    'Importe',
    'Total',
    'Estado'
  ];
  protected $guarded = [

  ];

}
