<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MisionVisionController extends Controller
{
    public function index(){
        return view('adminPC/misionVision/index');
    }
    public function create(){
        return view('adminPC/misionVision/create');
    }
}
