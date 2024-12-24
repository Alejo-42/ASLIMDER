<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Servicios;

class ServiciosController extends Controller
{
    public function inicio(){
        $getServicios = Servicios::all();

        $Servicios_A = DB::select("SELECT * FROM servicios WHERE status = 'ACTIVATE'");
        $Servicios_D = DB::select("SELECT * FROM servicios WHERE status = 'DESACTIVATE'");
        return view('layouts/servicios', compact('getServicios','Servicios_A','Servicios_D'));
    }
    public function guardar(Request $request){
        $request->validate([
            'titulo' => 'required|alpha_num',
            'descripcion' => 'required|alpha_num',
            'servicioURL' => 'required',
            'imagenes_id' => 'required|numeric',
            'categoria_id' => 'required|numeric',
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
            'imagenes_id' => 'required|numeric',
            'categoria_id' => 'required|numeric',
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
    public function estado($id){
        $estado = DB::select(DB::raw('SELECT s.status FROM servicios s WHERE s.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
            if ($item->status == 'DESACTIVATE') {
                DB::select(DB::raw("UPDATE servicios SET status = 'ACTIVATE' WHERE id = :id"), array('id'=>$id));
            }else if ($item->status == 'ACTIVATE') {
                DB::select(DB::raw("UPDATE servicios SET status = 'DESACTIVATE' WHERE id = :id"), array('id'=>$id));
            }
        }
        return redirect()->back();
    }
}
