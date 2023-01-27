<?php

namespace App\Models;
use App\Models\Vehiculo;
use App\Models\Motor;
use App\Models\TipoVehiculo;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $guarded = [ 
    'id_vehiculo',
    'marca',
    'modelo',
    'capasidad',
    'mastil',
    'serie',
    'status',
    'id_motor',
    'id_tipoVehiculo'
    ];
  
    
  
}
