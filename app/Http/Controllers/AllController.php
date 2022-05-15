<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function make(){
        return view('index');
    }
    public function make1(){
        return view('info');

    }
    public function make2(){
        return view('prodi_d3ti');

    }
    public function make3(){
        return view('silabus');

    }
    public function make4(){
        return view('presensi');
    }
    public function make5(){
        return view('prodi');
    }
    public function make6(){
        return view('upload');
    }
    public function make7(){
        return view('review');
    }
}
