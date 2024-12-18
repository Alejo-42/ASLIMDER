<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informaciones;
use App\Models\Mision_Visions;
use App\Models\Servicios;
use App\Models\Redes;
use App\Models\Imagenes;
use App\Models\Categorias;

class PaginaController extends Controller
{
    public function inicio(){
        $getInformaciones = Informaciones::all();
        $getMV = Mision_Visions::all();
        $getServicios = Servicios::all();
        $getRedes = Redes::all();
        $getImagenes = Imagenes::all();
        $getCategorias = Categorias::all();
        
        return view('sitioWeb/index', compact(
            'getInformaciones',
            'getImagenes',
            'getMV',
            'getServicios',
            'getRedes',
            'getCategorias'
        ));
    }
    public function panelDeControl(){
        return view('adminPc/panelDeControl');
    }
}
