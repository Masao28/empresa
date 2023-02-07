<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\RentaController;
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
    
///////////////////////ruta  de inventario  vehiculo////////////////////
Route::get('/inventario', [AdminController::class, 'inventario'])
->middleware('auth.admin')
->name('admin.inventario');
///////////////////////editar vehiculo //////////////////
Route::name('admin/edit')->get('edit/{id_vehiculo}', [AdminController::class, 'edit'])
->middleware('auth.admin');
Route::name('salvar')->put('salvar/{id_vehiculo}', [AdminController::class, 'salvar'])
->middleware('auth.admin');

///////////////////////editar EMPRESA //////////////////
Route::name('admin/edit2')->get('edit2/{id_empresa}', [AdminController::class, 'edit2'])
->middleware('auth.admin');

Route::name('salvar2')->put('salvar2/{id_empresa}', [AdminController::class, 'salvar2'])
->middleware('auth.admin');

///////////////////////editar motor //////////////////
Route::name('admin/edit3')->get('edit3/{id_motor}', [AdminController::class, 'edit3'])
->middleware('auth.admin');

Route::name('salvar3')->put('salvar3/{id_motor}', [AdminController::class, 'salvar3'])
->middleware('auth.admin');

///////////////////////editar tipo de vehiculo //////////////////
Route::name('admin/edit4')->get('edit4/{id_tipoVehiculo}', [AdminController::class, 'edit4'])
->middleware('auth.admin');

Route::name('salvar4')->put('salvar4/{id_tipoVehiculo}', [AdminController::class, 'salvar4'])
->middleware('auth.admin');


//////////////////Borrar vehioculo//////////////////
Route::name('borrarvehiculo')->get('borrarV/{id_vehiculo}', [AdminController::class, 'borrarV']);

//////////////////Borrar empresa//////////////////
Route::name('borrarempresa')->get('borrarE/{id_empresa}', [AdminController::class, 'borrarE']);

//////////////////Borrar motor//////////////////
Route::name('borrarmotor')->get('borrarM/{id_motor}', [AdminController::class, 'borrarM']);

//////////////////Borrar tipo vehiculo//////////////////
Route::name('borrartipovehiculo')->get('borrarTV/{id_tipoVehiculo}', [AdminController::class, 'borrarTV']);

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

///guardar renta
Route::post('/guardar3',[RentaController::Class ,'guardar3']);
///tabla de renta
Route::get('/tablarenta', [AdminController::class, 'tablarenta'])
->middleware('auth.admin')
->name('admin.Montacargasdesalida');

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
















    


  
    
    
