<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;

class ControlVehiculo extends Model
{
  protected $table='controlvehiculo';

  protected $primaryKey='idControlVehiculo';

  public $timestamps=false;


  protected $fillable =[
      'idVehiculo',
      'idAsignacion',
      'idColaborador',
      'Calcomania',
      'IdentificacionOficial',
      'SeguroVigente',
      'LlavedeTuercas',
      'Tricket',
      'LlantadeRepuesto',
      'FechaServicio',
      'Taller',
      'TipoServicio',
      'Elaborado',
      'Coordinador',
      'FechaElaboracion',
      'Estado'
  ];

  protected $guarded =[

  ];
}
