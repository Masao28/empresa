<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VehiculoController;


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

////ruta  de  Montacargasdeentrada
Route::get('/MontacargasE', [AdminController::class, 'MontacargasE'])
->middleware('auth.admin')
->name('admin.Montacargasdeentrada');

////ruta  de  Montacargasdesalida
Route::get('/MontacargasS', [AdminController::class, 'MontacargasS'])
->middleware('auth.admin')
->name('admin.Montacargasdesalida');

///ruta de guardar monta cargas
//Route::get('/guardar',[VehiculoController::Class, 'guardar'])
//->middleware('auth.admin')
//->name('admin.inventario');///--->

Route::post('/guardar',[VehiculoController::Class ,'guardar']);

Route::get('/regresarmenu', [AdminController::class, 'regresarmenu'])
->middleware('auth.admin')
->name('admin.maquinaria');






    


  
    
    
