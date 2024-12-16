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
        $getContactos = Contactos::all();
        return view('layouts/contactos', compact('getContactos'));
    }
    public function editar($id){
        $editarContactos = Contactos::where('id',$id)->firstOrFail();
        return view('layouts/edits/contactos',compact('editarContactos'));
    }
    public function actualizar(Request $request, $id){
        $actContactos = Contactos::findOrFail($id);
        $requestContactos = $request->all();
        $actContactos->update($requestContactos);
        $getContactos = Contactos::all();
        return view('layouts/contactos', compact('getContactos'));
    }
    public function eliminar($id){
        $eliminarContactos = Contactos::findOrFail($id);
        $eliminarContactos->delete();
        $getContactos = Contactos::all();
        return view('layouts/contactos', compact('getContactos'));
    }
}
