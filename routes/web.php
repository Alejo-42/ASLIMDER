<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\MisionVisionController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\RedesController;
use App\Http\Controllers\ServiciosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// PAGINA PRINCIPAL //
Route::get('/', [PaginaController::class,'inicio']);
Route::get('/volver',[PaginaController::class,'panelDeControl']);
Route::get('/panelDeControl', [PaginaController::class,'panelDeControl']);
// MISION VISION //
Route::get('/misionVision',[MisionVisionController::class,'inicio']);
Route::post('/misionVision/guardar',[MisionVisionController::class,'guardar']);
Route::get('/misionVision/editar/{id}',[MisionVisionController::class,'editar']);
Route::put('/misionVision/actualizar/{id}',[MisionVisionController::class,'actualizar']);
Route::delete('/misionVision/eliminar/{id}',[MisionVisionController::class,'eliminar']);
// CONTACTOS //
Route::get('/contactos',[ContactosController::class,'inicio']);
Route::post('/contactos/guardar',[ContactosController::class,'guardar']);
Route::get('/contactos/editar/{id}',[ContactosController::class,'editar']);
Route::put('/contactos/actualizar/{id}',[ContactosController::class,'actualizar']);
Route::delete('/contactos/eliminar/{id}',[ContactosController::class,'eliminar']);
// REDES //
Route::get('/redes',[RedesController::class,'inicio']);
Route::post('/redes/guardar',[RedesController::class,'guardar']);
Route::get('/redes/editar/{id}',[RedesController::class,'editar']);
Route::put('/redes/actualizar/{id}',[RedesController::class,'actualizar']);
Route::delete('/redes/eliminar/{id}',[RedesController::class,'eliminar']);
// SERVICIOS //
Route::get('/servicios',[ServiciosController::class,'inicio']);
Route::post('/servicios/guardar',[ServiciosController::class,'guardar']);
Route::get('/servicios/editar/{id}',[ServiciosController::class,'editar']);
Route::put('/servicios/actualizar/{id}',[ServiciosController::class,'actualizar']);
Route::delete('/servicios/eliminar/{id}',[ServiciosController::class,'eliminar']);