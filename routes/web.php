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

Route::get('/', [PaginaController::class,'inicio']);
Route::get('/panelDeControl', [PaginaController::class,'panelDeControl']);
// MISION VISION //
Route::get('/MV',[MisionVisionController::class,'inicio']);
Route::post('/guardarMV',[MisionVisionController::class,'guardar']);
Route::get('/editar/{id}',[MisionVisionController::class,'editar']);
Route::put('/actualizar/{id}',[MisionVisionController::class,'actualizar']);
Route::delete('/eliminar/{id}',[MisionVisionController::class,'eliminar']);
// CONTACTOS //
Route::get('/contactos',[ContactosController::class,'inicio']);
Route::post('/guardarContactos',[ContactosController::class,'guardar']);
Route::get('/editarContactos/{id}',[ContactosController::class,'editar']);
Route::put('/actualizarContactos/{id}',[ContactosController::class,'actualizar']);
Route::delete('/eliminarContactos/{id}',[ContactosController::class,'eliminar']);
// REDES //
Route::get('/redes',[RedesController::class,'inicio']);
Route::post('/guardarRedes',[RedesController::class,'guardar']);
Route::get('/editarRedes/{id}',[RedesController::class,'editar']);
Route::put('/actualizarRedes/{id}',[RedesController::class,'actualizar']);
// SERVICIOS //
Route::get('/servicios',[ServiciosController::class,'inicio']);
Route::post('/guardarServicios',[ServiciosController::class,'guardar']);
Route::get('/editarServicios/{id}',[ServiciosController::class,'editar']);
Route::put('/actualizarServicios/{id}',[ServiciosController::class,'actualizar']);