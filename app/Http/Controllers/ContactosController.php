<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactos;

class ContactosController extends Controller
{
    public function inicio(){
        $getContactos = Contactos::all();
        return view('layouts/contactos', compact('getContactos'));
    }
    public function guardar(Request $request){
        Contactos::create($request->all());
        return redirect()->to('/contactos');
    }
    public function editar($id){
        $editarContactos = Contactos::where('id',$id)->firstOrFail();
        return view('layouts/edits/contactos',compact('editarContactos'));
    }
    public function actualizar(Request $request, $id){
        $actContactos = Contactos::findOrFail($id);
        $requestContactos = $request->all();
        $actContactos->update($requestContactos);
        return redirect()->to('/contactos');
    }
    public function eliminar($id){
        $eliminarContactos = Contactos::findOrFail($id);
        $eliminarContactos->delete();
        return redirect()->to('/contactos');
    }
}
