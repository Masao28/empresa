<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Empresa;
use App\Models\TipoVehiculo;
use App\Models\Motor;
use App\Models\Vehiculo;



class AdminController extends Controller {
    
    public function index() {

        return view('admin.maquinaria');
    }
    
    public function inventario() {

        return view('admin.inventario');
    }
    public function MontacargasE() {

        return view('admin.Montacargasdeentrada');
    }
    public function MontacargasS() {

        return view('admin.Montacargasdesalida');
    }
    public function regresarmenu() {

        return view('admin.maquinaria');
    }
    public function tablaempresa(){
        $empresa = DB::table('empresas')->get();
        return view('admin.empresa', compact('empresa'));
    }
    public function motor() {
        return view('admin.motores');
    }
    public function tablamotor(){
        $motores = DB::table('motores')->get();
        return view('admin.motores', compact('motores'));
    }
    public function tipoV() {
       
        return view('admin.tipovehiculo');
    }
    public function tablatipo(){
       
        $tipoV = DB::table('tipovehiculos')->get();
        return view('admin.tipovehiculo', compact('tipoV'));
    }
   
    
    public function tablavehiculo(){
        $motor=Motor::all();
        $tipoV=TipoVehiculo::all();
        $vehiculos = DB::table('vehiculos')
        ->join('motores', 'vehiculos.id_motor', '=', 'motores.id_motor')
        ->join('tipovehiculos', 'vehiculos.id_tipoVehiculo', '=', 'tipovehiculos.id_tipoVehiculo')
        ->select('motores.nombre as motor', 'motores.id_motor as idM', 'tipovehiculos.nombre as tipo', 'tipovehiculos.id_tipoVehiculo as idTipo', 'vehiculos.*')
        ->orderBy('vehiculos.id_vehiculo','asc')
        ->get();
        return view('admin.inventario',
        compact('motor', 'tipoV','vehiculos'));
    }
    public function agregar() {

        return view('admin.agregar');
    }

    public function regresaragregar() {

        return view('admin.agregar');
    }
    public function vitatipovehiculo() {

        return view('admin.tipovehiculo');
    }
    //Editar vehiculo
    public function edit(Vehiculo $id_vehiculo)
    {
        $motor = Motor::all();
        $tipoV = TipoVehiculo::all();
        $vehiculos=Vehiculo::find($id_vehiculo);
        //dd($vehiculo -> all());
        ///return  $vehiculo;
       return view("admin.edit")
       ->with(['vehiculos'=>$id_vehiculo])
       ->with(['motor'=>$motor])
       ->with(['tipoV'=>$tipoV]);
       
    }
    public function salvar(Vehiculo $id_vehiculo, Request $request){
    $query= Vehiculo::find($id_vehiculo->id_vehiculo);
       $query->marca = $request->marca;
       $query->modelo = $request->modelo;
       $query->capacidad = $request->capacidad;
       $query->mastil = $request->mastil;
       $query->serie = $request->serie;
       $query->status = $request->status;
       $query->id_motor = $request->id_motor;
       $query->id_tipoVehiculo = $request->id_tipoVehiculo;
       $query->save();
       return redirect()->route("admin.inventario", ['id_vehiculo' =>$id_vehiculo->id_vehiculo]);
    }
 //////////////Borrar vehiculo
    public function borrarV(Vehiculo $id_vehiculo, Request $request){
        $id_vehiculo->delete();
        return redirect()->route("admin.inventario");
        }
   


}
