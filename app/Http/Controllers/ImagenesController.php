<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagenes;

class ImagenesController extends Controller
{
    public function inicio(){
        $getImagenes = Imagenes::all();
        return view('layouts/imagenes', compact('getImagenes'));
    }
    public function guardar(Request $request){
        Imagenes::create($request->all());
        return redirect()->to('imagenes');
    }
    public function editar($id){
        $editarImagenes = Imagenes::where('id',$id)->firstOrFail();
        return view('/layouts/edits/imagenes',compact('editarImagenes'));
    }
    public function actualizar(Request $request, $id){
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
}