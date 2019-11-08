<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  protected $table='proveedor';

  protected $primaryKey='idProveedor';

  public $timestamps=false;


  protected $fillable =[
      'Proveedor',
      'Contacto',
      'Direccion',
      'Nit',
      'Telefono',
      'Estado'
  ];

  protected $guarded =[

  ];
}
