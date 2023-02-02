<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    use HasFactory;
    protected $table = 'tipovehiculos';
    //protected $primaryKey = 'id';
    protected $fillable = [
   'nombre'
    ];
    protected $primaryKey = 'id_tipoVehiculo';
    public function tipoVehiculo(){
        return $this->belongsTo(TipoVehiculo::clas,'id_tipoVehiculo','nombre');
       }
    
}
