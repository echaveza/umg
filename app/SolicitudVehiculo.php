<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;

class SolicitudVehiculo extends Model
{
  protected $table='solicitudvehiculo';

  protected $primaryKey='idSolicitudVehiculo';

  public $timestamps=false;

  protected $fillable = [
    'FechaSolicitud',
    'Unidad',
    'Duracion',
    'Objetivo',
    'Responsable',
    'Telefono',
    'NoPersonas',
    'Destino',
    'FechaIni',
    'FechaFin',
    'HoraSalida',
    'Kilometraje',
    'Estado'
  ];
  protected $guarded = [

  ];
}
