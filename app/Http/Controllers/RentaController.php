<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentaController extends Controller
{
    function guardar3(Request $request){

        $renta = new Renta;
        $renta->id_renta = $request->input("id_renta");
        $renta->id_empresa = $request->input("id_empresa");
        $renta->fecha_pedido = $request->input("fecha_pedido");
        $renta->tipo_renta = $request->input("tipo_renta");
        $renta->id_vehiculo = $request->input("id_vehiculo");
        $renta->rendatario = $request->input("rendatario");
        $renta->save();
        $rentas = Renta::all();

        ////return redirect()->route('admin.tablaempresa');
        return redirect()->to('tablarenta');

    }
}
