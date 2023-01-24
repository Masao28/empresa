<?php

namespace App\Models;
use App\Models\Vehiculo;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $guarded = [ 'id',
    'marca',
    'modelo',
    'Serie',
    'tipo',
    'capasidad',
    'mastil',
    'tipove',
    'estatus'];
  
    ///return $this->hasOne(Phone::class);
}
