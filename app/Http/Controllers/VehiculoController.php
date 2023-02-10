<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Request\ValidaRequest;
use App\Models\Vehiculo;
class VehiculoController extends Controller
{
    function guardar(Request $request){
        $this->validate($request, [
            'marca' => 'required',
            'modelo' => 'required',
            'capacidad' => 'required',
            'mastil' => 'required',
            'serie' => 'required',
            'status' => 'required',
            'foto' => 'required',
        ]);
        if($request->file('foto') != ''){
            //-------------------Foto/Archivo--------------
            $file = $request->file('foto');

            $foto = $file->getClientOriginalName();
            //$foto = $request->$file->getClientOriginalName();

            $date =date('Ymd_His_');
                  $foto2 = $date . $foto;
            
            \Storage::disk('local')->put($foto2, \File::get($file));
        }
        else{
            $foto2 = "shadow.png";
        
    }
    $vehiculo = new Vehiculo;
    $vehiculo->id_vehiculo = $request->input("id_vehiculo");
    $vehiculo->marca = $request->input("marca");
    $vehiculo->modelo = $request->input("modelo");
    $vehiculo->capacidad = $request->input("capacidad");
    $vehiculo->mastil = $request->input("mastil");
    $vehiculo->serie = $request->input("serie");
    $vehiculo->status = $request->input("status");
    $vehiculo->status = $request->input("status");
    $vehiculo->foto = $foto2;
    $vehiculo->id_motor = $request->input("id_motor");
    $vehiculo->id_tipoVehiculo = $request->input("id_tipoVehiculo");
    $vehiculo->fecha = $request->input("fecha");
  
    $vehiculo->save();
    $vehiculos = Vehiculo::all();

        return redirect()->to('tablavehiculo');
    }

    
    
}