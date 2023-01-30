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
   
    public function vehiculo() {
        $motores = Motor::all();
        return view('admin.vehiculo')
        ->with(['motores' => $motores]);
    }
    public function tablavehiculo(){
        $vehiculos = DB::table('vehiculos')
        ->join('motores', 'vehiculos.id_motor', '=', 'motores.id_motor')
        ->join('tipovehiculos', 'vehiculos.id_tipoVehiculo', '=', 'tipovehiculos.id_tipoVehiculo')
        ->select('motores.nombre as motor', 'motores.id_motor as idM', 'tipovehiculos.nombre as tipo', 'tipovehiculos.id_tipoVehiculo as idTipo', 'vehiculos.*')
        ->orderByDesc('vehiculos.id_vehiculo')
        ->get();
        return view("admin/inventario")
        ->with(['vehiculos'=> $vehiculos]);
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
    public function edit($id_vehiculo)
    {
        $itemvehiculo=Vehiculo::fileinode($id_vehiculo);
        return $itemvehiculo;
        ///return view('admin.edit', compact('itemvehiculo'));
    }
}
