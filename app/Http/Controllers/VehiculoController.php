<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
class VehiculoController extends Controller
{
    function guardar(Request $request){

        $vehiculo = new Vehiculo;
        $vehiculo->id_vehiculo = $request->input("id_vehiculo");
        $vehiculo->marca = $request->input("marca");
        $vehiculo->modelo = $request->input("modelo");
        $vehiculo->capacidad = $request->input("capacidad");
        $vehiculo->mastil = $request->input("mastil");
        $vehiculo->serie = $request->input("serie");
        $vehiculo->status = $request->input("status");
        $vehiculo->id_motor = $request->input("id_motor");
        $vehiculo->id_tipoVehiculo = $request->input("id_tipoVehiculo");
        
        $vehiculo->save();
        $vehiculos = Vehiculo::all();
        
        ////return view("admin.inventario");
        return redirect()->to('tablavehiculo');
    }
    
}