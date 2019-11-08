<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{

  protected $table='vehiculo';

  protected $primaryKey='idVehiculo';

  public $timestamps=false;

  protected $fillable = [
    'Marca',
    'NoPasajeros',
    'Modelo',
    'Placas',
    'Color',
    'Cilindros',
    'Capacidad',
    'Combustible',
    'TResponsabilidad',
    'NoMotor',
    'NoChasis',
    'CalVigente',
    'IdentificadorOficial',
    'PfAsignado',
    'SVigente',
    'KeyTuercas',
    'Tricket',
    'LlantaRepuesto',
    'Estado'
  ];
  protected $guarded = [

  ];
}
