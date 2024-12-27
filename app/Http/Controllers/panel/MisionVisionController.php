<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Mision_Visions;
use Illuminate\Http\Request;

class MisionVisionController extends Controller
{
    public function index(){
        $get_MV = Mision_Visions::where('status','ACTIVATE')->get();
        return view('adminPC/misionVision/index', compact('get_MV'));
    }
    public function create(){
        return view('adminPC/misionVision/create');
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
    public function edit($id){
        $MV = Mision_Visions::find($id);
        return view('adminPC/misionVision/edit',compact('MV'));
    }
    public function update(Request $request, Mision_Visions $Mision_Visions, $img){

        $datos = $request->all();

        $Mision_Visions = Mision_Visions::find($datos['id']);

        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta,$nombreI);
            $datos['image'] = "$nombreI";
        }else{
            $datos['image'] = "$img";
        }

        $Mision_Visions->update($datos);
        return redirect()->to('/misvis');
    }
    public function status($id){
        $estado = Mision_Visions::find($id);

        if ($estado->status == "ACTIVATE") {
            Mision_Visions::where('id',$id)->update(['status' => "DESACTIVATE"]);
        }
        else {
            Mision_Visions::where('id',$id)->update(['status' => "ACTIVATE"]);
        }
        return redirect()->to('/misvis');
    }
    public function indexD(){
        $get_MV = Mision_Visions::where('status','DESACTIVATE')->get();
        return view('adminPC/misionVision/indexD', compact('get_MV'));
    }
}
