<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


route::get('/', HomeController::class);

route::controller(HomeController::class)->group(function(){
    Route::get('Inicio_r','index');
});

route::controller(CarrerasController::class)->group(function(){
    Route::get('ExplotacionGanadera_r','carrera1');
    Route::get('Horticultura_r','carrera2');
    Route::get('Administracion_r','carrera3');
    Route::get('DesarrolloCom_r','carrera4');
    Route::get('Informatica_r','carrera5');
    Route::get('Agroindustrias_r','carrera6');
});

// route::get('carreras/carrera1', [CarrerasController::class, 'carrera1']);
// route::get('carreras/carrera2', [CarrerasController::class, 'carrera2']);
// route::get('carreras/carrera3', [CarrerasController::class, 'carrera3']);
// route::get('carreras/carrera4', [CarrerasController::class, 'carrera4']);
// route::get('carreras/carrera5', [CarrerasController::class, 'carrera5']);
// route::get('carreras/carrera6', [CarrerasController::class, 'carrera6']);














// Route::get('/', UserController::class);

// Route::controller(UserController::class)->group(function(){
//     Route::get('index/index', 'index01');
//     // Route::get('info','index02');
// });

// Route::controller(CarrerasController::class)->group(function(){
//     Route::get('carreras/ExplotacionGanadera','index01');
// });


//  route::get('carrera1', function(){
//      return view('carreras.ExplotacionGanadera');
//  });

//  route::get('carrera2', function(){
//      return view('carreras.Horticultura');
//  });

//  route::get('carrera3', function(){
//      return view('carreras.Administracion');
//  });

//  route::get('carrera4', function(){
//      return view('carreras.desarrolloCom');
//  });

//  route::get('carrera5', function(){
//      return view('carreras.Informatica');
//  });

//  route::get('carrera6', function(){
//      return view('carreras.Agroindustrias');
//  });
