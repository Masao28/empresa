<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
 
    protected $guarded2 = [
        'nombre'];
        protected $primaryKey= 'id_empresa';
    
    ////// ['id','empresa'];
    
}
