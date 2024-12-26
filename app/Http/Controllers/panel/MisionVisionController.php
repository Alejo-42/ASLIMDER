<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Mision_Visions;
use Illuminate\Http\Request;

class MisionVisionController extends Controller
{
    public function index(){
        return view('adminPC/misionVision/index2');
    }
    public function create(){
        return view('adminPC/misionVision/create2');
    }
    public function edit(){
        return view('adminPC/misionVision/edit');
    }
    public function store(Request $request){
        $mis_vis = $request->all();

        if ($imagen = $request->file('image')) {
            $ruta = 'imagen/';
            $nombreImg = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreImg);
            $mis_vis['image'] = "$nombreImg";
        }
        Mision_Visions::create($mis_vis);
        return redirect()->to('/misvis');
    }
}
