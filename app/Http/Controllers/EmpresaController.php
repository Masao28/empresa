<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
class EmpresaController extends Controller
{
    function guardar2(Request $request){

        $empresa = new Empresa;
        $empresa->empresa = $request->input("empresa");
        $empresa->save();
        $empresas = Empresa::all();
        
        
        ////return redirect()->route('admin.tablaempresa');
        return redirect()->to('tablaempresa');
    

    }
}
