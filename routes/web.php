<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\Mision_VisionsController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\InformacionesController;
use App\Http\Controllers\RedesController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\panel\MisionVisionController;

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
// MISION Y VISION //
Route::get('/misionVision',[Mision_VisionsController::class,'inicio']);
Route::post('/misionVision/guardar',[Mision_VisionsController::class,'guardar']);
Route::get('/misionVision/editar/{id}',[Mision_VisionsController::class,'editar']);
Route::put('/misionVision/actualizar/{id}',[Mision_VisionsController::class,'actualizar']);
Route::delete('/misionVision/eliminar/{id}',[Mision_VisionsController::class,'eliminar']);
Route::get('/misionVision/estado/{id}',[Mision_VisionsController::class,'estado']);
// IMAGENES //
Route::get('/imagenes',[ImagenesController::class,'inicio']);
Route::post('/imagenes/guardar',[ImagenesController::class,'guardar']);
Route::get('/imagenes/editar/{id}',[ImagenesController::class,'editar']);
Route::put('/imagenes/actualizar/{id}',[ImagenesController::class,'actualizar']);
Route::delete('/imagenes/eliminar/{id}',[ImagenesController::class,'eliminar']);
Route::get('/imagenes/estado/{id}',[ImagenesController::class,'estado']);
// CATEGORIAS //
Route::get('/categorias',[CategoriasController::class,'inicio']);
Route::post('/categorias/guardar',[CategoriasController::class,'guardar']);
Route::get('/categorias/editar/{id}',[CategoriasController::class,'editar']);
Route::put('/categorias/actualizar/{id}',[CategoriasController::class,'actualizar']);
Route::delete('/categorias/eliminar/{id}',[CategoriasController::class,'eliminar']);
Route::get('/categorias/estado/{id}',[CategoriasController::class,'estado']);
//INFORMACIONES //
Route::get('/informaciones',[InformacionesController::class,'inicio']);
Route::post('/informaciones/guardar',[InformacionesController::class,'guardar']);
Route::get('/informaciones/editar/{id}',[InformacionesController::class,'editar']);
Route::put('/informaciones/actualizar/{id}',[InformacionesController::class,'actualizar']);
Route::delete('/informaciones/eliminar/{id}',[InformacionesController::class,'eliminar']);
Route::get('/informaciones/estado/{id}',[InformacionesController::class,'estado']);
// REDES //
Route::get('/redes',[RedesController::class,'inicio']);
Route::post('/redes/guardar',[RedesController::class,'guardar']);
Route::get('/redes/editar/{id}',[RedesController::class,'editar']);
Route::put('/redes/actualizar/{id}',[RedesController::class,'actualizar']);
Route::delete('/redes/eliminar/{id}',[RedesController::class,'eliminar']);
Route::get('/redes/estado/{id}',[RedesController::class,'estado']);
// SERVICIOS //
Route::get('/servicios',[ServiciosController::class,'inicio']);
Route::post('/servicios/guardar',[ServiciosController::class,'guardar']);
Route::get('/servicios/editar/{id}',[ServiciosController::class,'editar']);
Route::put('/servicios/actualizar/{id}',[ServiciosController::class,'actualizar']);
Route::delete('/servicios/eliminar/{id}',[ServiciosController::class,'eliminar']);
Route::get('/servicios/estado/{id}',[ServiciosController::class,'estado']);

// MISION VISION //
Route::get('/misvis',[MisionVisionController::class,'index']);
Route::get('/misvis/create',[MisionVisionController::class,'create']);