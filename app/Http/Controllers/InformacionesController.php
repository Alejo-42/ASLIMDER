<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informaciones;

class InformacionesController extends Controller
{
    public function inicio(){
        $getInfo = Informaciones::all();
        return view('layouts/informaciones', compact('getInfo'));
    }
    public function guardar(Request $request){
        $request->validate([
            'logo' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required|num',
            'direccion' => 'required'
        ]);
        
        Informaciones::create($request->all());
        return redirect()->to('informaciones');
    }
    public function editar($id){
        $editarInfo = Informaciones::where('id',$id)->firstOrFail();
        return view('/layouts/edits/informaciones',compact('editarInfo'));
    }
    public function actualizar(Request $request, $id){
        $request->validate([
            'logo' => 'required',
            'correo' => 'required|email ',
            'telefono' => 'required|num',
            'direccion' => 'required'
        ]);
        $actInfo = Informaciones::findOrFail($id);
        $requestInfo = $request->all();
        $actInfo->update($requestInfo);
        return redirect()->to('informaciones');
    }
    public function eliminar($id){
        $eliminarInfo = Informaciones::findOrFail($id);
        $eliminarInfo->delete();
        return redirect()->to('informaciones');
    }
}
