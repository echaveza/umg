<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
  protected $table='colaborador';

  protected $primaryKey='idColaborador';

  public $timestamps=false;

  protected $fillable = [
    'Unidad',
    'Nombres',
    'Apellidos',
    'Telefono',
    'Cargo',
    'Renglon',
    'FechaNacimiento',
    'Estado'
  ];
  protected $guarded = [

  ];

}
