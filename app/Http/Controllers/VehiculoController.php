<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        ]);
        if($request->file('img') != ''){
            //-------------------Foto/Archivo--------------
            $file = $request->file('img');

            $img = $file->getClientOriginalName();
            //$foto = $request->$file->getClientOriginalName();

            $date =date('Ymd_His_');
                  $img2 = $date . $img;

            \Storage::disk('local')->put($img2, \File::get($file));
        }
        else{
            $img2 = "shadow.png";

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
    $vehiculo->img = $img2;
    $vehiculo->id_motor = $request->input("id_motor");
    $vehiculo->id_tipoVehiculo = $request->input("id_tipoVehiculo");
    $vehiculo->fecha = $request->input("fecha");
  
    $vehiculo->save();
    $vehiculos = Vehiculo::all();

    return redirect()->to('tablavehiculo');
    }

    
    
}