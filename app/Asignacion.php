<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
  protected $table='asignacion';

  protected $primaryKey='idAsignacion';

  public $timestamps=false;


  protected $fillable =[
      'idSolicitud',
      'Placas',
      'FechaServicio',
      'Taller',
      'Kilometraje',
      'TipoServicio',
      'Observaciones',
      'PilotoAsignado',
      'FechaAsignacion',
      'Elaborado',
      'Coordinador',
      'Estado'
  ];

  protected $guarded =[

  ];
}
