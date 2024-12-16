<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;

class ServiciosController extends Controller
{
    public function inicio(){
        $getServicios = Servicios::all();
        return view('layouts/servicios', compact('getServicios'));
    }
    public function guardar(Request $request){
        Servicios::create($request->all());
        $getServicios = Servicios::all();
        return view('layouts/servicios', compact('getServicios'));
    }
    public function editar($id){
        $editarServicios = Servicios::where('id',$id)->firstOrFail();
        return view('layouts/edits/servicios',compact('editarServicios'));
    }
    public function actualizar(Request $request, $id){
        $actServicios = Servicios::findOrFail($id);
        $requestServicios = $request->all();
        $actServicios->update($requestServicios);
        $getServicios = Servicios::all();
        return view('layouts/servicios', compact('getServicios'));
    }
    public function eliminar($id){
        $eliminarServicios = Servicios::findOrFail($id);
        $eliminarServicios->delete();
        $getServicios = Servicios::all();
        return view('layouts/servicios', compact('getServicios'));
    }
}
