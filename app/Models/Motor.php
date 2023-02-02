<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $table = 'motores';
    protected $fillable = [
   'nombre'
    ];
    protected $primaryKey= 'id_motor';
}
