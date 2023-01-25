<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
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
}
