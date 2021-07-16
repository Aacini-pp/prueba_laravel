<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| .  get post put delete any
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(["prefix"=> "admin"],function(){
    
    Route::resource("alumnos","AlumnosController");
    Route::get("alumnos/{id}/destroy",[
        "uses" => "AlumnosController@destroy",
        "as"=>"alumnos.destroy"
    ]);
    
    Route::resource("grupos","GruposController");
    Route::get("grupos/{id}/destroy",[
        "uses" => "GruposController@destroy",
        "as"=>"grupos.destroy"
    ]);
    
});


Route::get('ejemploRuta/{nombre?}', function ($nombre=" sinNombre") {
    echo "estos son los grupos ".$nombre;
});





