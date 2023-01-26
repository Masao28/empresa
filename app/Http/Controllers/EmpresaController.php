<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Motor;
use App\Models\TipoVehiculo;
class EmpresaController extends Controller
{
    function guardar2(Request $request){

        $empresa = new Empresa;
        $empresa->nombre = $request->input("nombre");
        $empresa->save();
        $empresas = Empresa::all();

        ////return redirect()->route('admin.tablaempresa');
        return redirect()->to('tablaempresa');

    }
    function saveMotor(Request $request){
        $motor = new Motor;
        $motor->nombre = $request->input("nombre");
        $motor->save();
        $motores = Motor::all();
        return redirect()->to('tablamotor');

    }
    function saveTipoVehiculo(Request $request){
        $tipo = new TipoVehiculo;
        $tipo->nombre = $request->input("nombre");
        $tipo->save();
        $tipoV = TipoVehiculo::all();
        return redirect()->to('tablatipo');

    }
}
