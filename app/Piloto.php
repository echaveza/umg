<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{
  protected $table='piloto';

  protected $primaryKey='idPiloto';

  public $timestamps=false;


  protected $fillable =[

      'Piloto',
      'Direccion',
      'Telefono',
      'Estado'
  ];

  protected $guarded =[

  ];
}
