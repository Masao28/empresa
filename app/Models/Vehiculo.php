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
    'marca',
    'modelo',
    'capasidad',
    'mastil',
    'serie',
    'status',
    'foto',
    'fecha',
    'id_motor',
    'id_tipoVehiculo',
    
    ];
    protected $primaryKey= 'id_vehiculo';
  
    
  
}
