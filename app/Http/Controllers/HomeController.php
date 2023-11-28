<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('index.index');
    }

    public function index(){
        return view('index.index');
    }
}
