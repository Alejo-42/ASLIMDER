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
        $request->validate([
            'titulo' => 'required|alpha_num',
            'descripcion' => 'required|alpha_num',
            'servicioURL' => 'required',
            'imagenes_id' => 'required|num',
            'categoria_id' => 'required|num',
        ]);
        Servicios::create($request->all());
        return redirect()->to('servicios');
    }
    public function editar($id){
        $editarServicios = Servicios::where('id',$id)->firstOrFail();
        return view('/layouts/edits/servicios',compact('editarServicios'));
    }
    public function actualizar(Request $request, $id){
        $request->validate([
            'titulo' => 'required|alpha_num',
            'descripcion' => 'required|alpha_num',
            'servicioURL' => 'required',
            'imagenes_id' => 'required|num',
            'categoria_id' => 'required|num',
        ]);
        $actServicios = Servicios::findOrFail($id);
        $requestServicios = $request->all();
        $actServicios->update($requestServicios);
        return redirect()->to('servicios');
    }
    public function eliminar($id){
        $eliminarServicios = Servicios::findOrFail($id);
        $eliminarServicios->delete();
        return redirect()->to('servicios');
    }
}
