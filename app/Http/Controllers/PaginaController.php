<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informaciones;
use App\Models\Mision_Visions;
use App\Models\Servicios;
use App\Models\Redes;
use App\Models\Imagenes;
use App\Models\Categorias;
use Illuminate\Support\Facades\DB;

class PaginaController extends Controller
{
    public function inicio(){
        $Mision = Mision_Visions::where('status', 'ACTIVATE')->where('id', 1)->first();
        $Vision = Mision_Visions::where('status', 'ACTIVATE')->where('id', 2)->first();
        return view('layouts1/index', compact('Mision','Vision'));
    }
    public function panelDeControl(){
        return view('adminPC/panelDeControl');
    }
}
