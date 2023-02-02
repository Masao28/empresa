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
////////Editar empresa
    public function edit2(Empresa $id_empresa){
        
    $empresas=Empresa::find($id_empresa);
       return view("admin.edit2")
       ->with(['empresas'=>$id_empresa]);
      
    }
    
    public function salvar2(Empresa $id_empresa, Request $request){
        $query= Empresa::find($id_empresa->id_empresa);
           $query->nombre = $request->nombre;
           $query->save();
           return redirect()->route("admin.empresa", ['id_empresa' =>$id_empresa->id_empresa]);
        }

   ///////borrar empresa
    public function borrarE(Empresa $id_empresa, Request $request){
         $id_empresa->delete();
            return redirect()->route("admin.empresa");
            }

///////borrar motores
    public function borrarM(Motor $id_motor, Request $request){
    $id_motor->delete();
    return redirect()->route("admin.motores");
    }

    ////////Editar motores 
    public function edit3(Motor $id_motor){
        
        $motores=Motor::find($id_motor);
           return view("admin.edit3")
           ->with(['motores'=>$id_motor]);
          
        }
    public function salvar3(Motor $id_motor, Request $request){
            $query= Motor::find($id_motor->id_motor);
               $query->nombre = $request->nombre;
               $query->save();
               return redirect()->route("admin.motores", ['id_motor' =>$id_motor->id_motor]);
            }

    ///////borrar tipo de vehiculo
    public function borrarTV(TipoVehiculo $id_tipoVehiculo, Request $request){
        $id_tipoVehiculo->delete();
        return redirect()->route("admin.tipovehiculo");
        }

          ////////Editar tipo de vehiculo 
    public function edit4(TipoVehiculo $id_tipoVehiculo){
        
        $vehiculotipo=TipoVehiculo::find($id_tipoVehiculo);
           return view("admin.edit4")
           ->with(['vehiculotipo'=>$id_tipoVehiculo]);
          
        }
    public function salvar4(TipoVehiculo $id_tipoVehiculo, Request $request){
            $query= TipoVehiculo::find($id_tipoVehiculo->id_tipoVehiculo);
               $query->nombre = $request->nombre;
               $query->save();
               return redirect()->route("admin.tipovehiculo", ['id_tipoVehiculo' =>$id_tipoVehiculo->id_tipoVehiculo]);
            }
}
