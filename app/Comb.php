<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;

class Comb extends Model
{
  protected $table='combustible';

  protected $primaryKey='idCombustible';

  public $timestamps=false;


  protected $fillable =[

      'Nombre',
      'Stock',
      'Estado'
  ];

  protected $guarded =[

  ];
}
