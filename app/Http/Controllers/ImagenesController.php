<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagenes;
use Illuminate\Support\Facades\DB;

class ImagenesController extends Controller
{
    public function inicio(){
        $getImagenes = Imagenes::all();

        $IMG_A = DB::select("SELECT * FROM imagenes WHERE status = 'ACTIVATE'");
        $IMG_D = DB::select("SELECT * FROM imagenes WHERE status = 'DESACTIVATE'");
        return view('layouts/imagenes', compact('getImagenes','IMG_A','IMG_D'));
    }
    public function guardar(Request $request){
        $request->validate([
            'imgURL' => 'required'
        ]);
        Imagenes::create($request->all());
        return redirect()->to('imagenes');
    }
    public function editar($id){
        $editarImagenes = Imagenes::where('id',$id)->firstOrFail();
        return view('/layouts/edits/imagenes',compact('editarImagenes'));
    }
    public function actualizar(Request $request, $id){
        $request->validate([
            'imgURL' => 'required'
        ]);
        $actImagenes = Imagenes::findOrFail($id);
        $requestIMG = $request->all();
        $actImagenes->update($requestIMG);
        return redirect()->to('imagenes');
    }
    public function eliminar($id){
        $eliminarIMG = Imagenes::findOrFail($id);
        $eliminarIMG->delete();
        return redirect()->to('imagenes');
    }
    public function estado($id){
        $estado = DB::select(DB::raw('SELECT img.status FROM imagenes img WHERE img.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
            if ($item->status == 'DESACTIVATE') {
                DB::select(DB::raw("UPDATE imagenes SET status = 'ACTIVATE' WHERE id = :id"), array('id'=>$id));
            }else if ($item->status == 'ACTIVATE') {
                DB::select(DB::raw("UPDATE imagenes SET status = 'DESACTIVATE' WHERE id = :id"), array('id'=>$id));
            }
        }
        return redirect()->back();
    }
}