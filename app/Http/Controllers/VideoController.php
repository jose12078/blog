<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');;
    }
    public function show($video){
        return view('cursos.show');;
    }
}
