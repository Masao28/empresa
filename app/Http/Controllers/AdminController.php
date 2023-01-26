<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Empresa;


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
        $vehiculo = DB::table('vehiculos')->get();
        return view('admin.inventario', compact('vehiculo'));
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


    

}
