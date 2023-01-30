<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\EmpresaController;
use App\Models\Empresa;


Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');
    
////ruta  de inventario  
Route::get('/inventario', [AdminController::class, 'inventario'])
->middleware('auth.admin')
->name('admin.inventario');

/////ruta de editar vehiculo //
Route::get('/edit/{$id_vehiculo}', [AdminController::class, 'edit'])
->middleware('auth.admin')
->name('admin.edit');

////ruta  de  Montacargasdeentrada
Route::get('/MontacargasE', [AdminController::class, 'MontacargasE'])
->middleware('auth.admin')
->name('admin.Montacargasdeentrada');

////ruta  de  Montacargasdesalida
Route::get('/MontacargasS', [AdminController::class, 'MontacargasS'])
->middleware('auth.admin')
->name('admin.Montacargasdesalida');

/////regresar a menu principal 
Route::get('/regresarmenu', [AdminController::class, 'regresarmenu'])
->middleware('auth.admin')
->name('admin.maquinaria');

/////inventario guardarmaquinaria 
Route::post('/guardar',[VehiculoController::Class ,'guardar']);

//****************************Area de administracio**************************** */


///guardar empresa 
Route::post('/guardar2',[EmpresaController::Class ,'guardar2']);
///tabla de empresas
Route::get('/tablaempresa', [AdminController::class, 'tablaempresa'])
->middleware('auth.admin')
->name('admin.empresa');
////////////////////////////////Creacion motor////////////////////////
Route::post('/saveMotor',[EmpresaController::Class ,'saveMotor']);
////////////////////////////////Motores//////////////////////////////
Route::get('/tablamotor', [AdminController::class, 'tablamotor'])
->middleware('auth.admin')
->name('admin.motores');
////////////////////////////////Creacion TipoVehiculo////////////////////////
Route::post('/saveTipoVehiculo',[EmpresaController::Class ,'saveTipoVehiculo']);
////////////////////////////////Motores//////////////////////////////
Route::get('/tablatipo', [AdminController::class, 'tablatipo'])
->middleware('auth.admin')
->name('admin.tipovehiculo');


//******************************************************************************* */
///////tabla vehiculos
Route::get('/tablavehiculo', [AdminController::class, 'tablavehiculo'])
->middleware('auth.admin')
->name('admin.inventario');

/////vista de agregar   
Route::get('/agregar', [AdminController::class, 'agregar'])
->middleware('auth.admin')
->name('admin.agregar');


//////regresaragregar
Route::get('/regresaragregar', [AdminController::class, 'regresaragregar'])
->middleware('auth.admin')
->name('admin.regresaragregar');



//////vista tipo de vehiculos
Route::get('/vitatipovehiculo', [AdminController::class, 'vitatipovehiculo'])
->middleware('auth.admin')
->name('admin.vitatipovehiculo');













    


  
    
    
