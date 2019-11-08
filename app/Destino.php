<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{

  protected $table='destino';

  protected $primaryKey='idDestino';

  public $timestamps=false;


  protected $fillable =[
      'Destino',
      'Kilometraje',
      'Estado'
  ];

  protected $guarded =[

  ];
}
