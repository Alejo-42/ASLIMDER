<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisionVision;
use App\Models\Contactos;
use App\Models\Redes;
use App\Models\Servicios;

class PaginaController extends Controller
{
    public function inicio(){
        $getMV = MisionVision::all();
        $getContactos = Contactos::all();
        $getRedes = Redes::all();
        $getServicios = Servicios::all();
        return view('sitioWeb/index', compact('getMV','getContactos','getRedes','getServicios'));
    }
    public function panelDeControl(){
        return view('adminPc/panelDeControl');
    }
}
