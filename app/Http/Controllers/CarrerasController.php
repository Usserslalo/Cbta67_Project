<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrerasController extends Controller
{
    public function carrera1(){
        return view('carreras.ExplotacionGanadera');
    }

    public function carrera2(){
        return view('carreras.Horticultura');
    }

    public function carrera3(){
        return view('carreras.Administracion');
    }

    public function carrera4(){
        return view('carreras.desarrolloCom');
    }

    public function carrera5(){
        return view('carreras.Informatica');
    }

    public function carrera6(){
        return view('carreras.Agroindustrias');
    }

}
