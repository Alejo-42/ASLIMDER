<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Redes;
use Illuminate\Http\Request;

class RedesController extends Controller
{
    public function index(){
        $getRedes = Redes::where('status','ACTIVATE');
    }
}
