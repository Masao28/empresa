<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class renta extends Model
{
    protected $guarded3 = [ 
        'id_empresa',
        'fecha_pedido',
        'tipo_renta',
        'id_vehiculo',
        'rendatario',
    
        
        ];
        protected $primaryKey= 'id_renta';
}
