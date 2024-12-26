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
        $getInformaciones = Informaciones::all();
        $getMV = Mision_Visions::all();
        $getServicios = Servicios::all();
        $getRedes = Redes::all();
        $getImagenes = Imagenes::all();
        $getCategorias = Categorias::all(); 
        
        /*$get_MV = DB::select('SELECT mv.texto AS texto_mv, img.imgURL AS img_url
        FROM mision__visions mv 
        INNER JOIN imagenes img ON mv.imagenes_id = img.id');*/
        return view('sitioWeb/index', compact(
            'getInformaciones',
            'getImagenes',
            'getMV',
            'getServicios',
            'getRedes',
            'getCategorias',
        ));
    }
    public function panelDeControl(){
        return view('adminPC/panelDeControl');
    }
}
