<?php

namespace SisCombustible;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Unidad extends Model
{
  protected $table='unidad';

  protected $primaryKey='idUnidad';

  public $timestamps=false;


  protected $fillable =[

      'NombreUnidad',
      'Descripcion',
      'Estado'
  ];

  protected $guarded =[

  ];
}
