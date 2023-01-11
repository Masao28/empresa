<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
class VehiculoController extends Controller
{
    function guardar(Request $request){

        $vehiculo = new Vehiculo;
        $vehiculo->marca = $request->input("marca");
        $vehiculo->modelo = $request->input("modelo");
        $vehiculo->Serie = $request->input("serie");
        $vehiculo->Tipo = $request->input("tipo");

        $vehiculo->Capasidad = $request->input("capasidad");
        $vehiculo->Mastil = $request->input("mastil");
        $vehiculo->Tipove = $request->input("tipove");
        $vehiculo->Veiculo_en_renta = $request->has("Veiculo_en_renta");
        $vehiculo->Veiculo_en_vendido = $request->has("Veiculo_en_vendido");
        $vehiculo-> Veiculo_en_reparacion = $request->has("Veiculo_en_reparacion");
        $vehiculo->save();
        $vehiculos = Vehiculo::all();
        return view("admin.inventario");
    }
}