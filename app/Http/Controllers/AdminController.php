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
    
    public function empresa() {

        return view('admin.empresa');
    }
   
    public function tablaempresa(){
        $empresa = DB::table('empresas')->get();
        return view('admin.empresa', compact('empresa'));
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

    public function vitasmotores() {

        return view('admin.motores');
    }
    
    public function vitatipovehiculo() {

        return view('admin.tipovehiculo');
    }


    

}
