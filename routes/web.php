<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('paises' , function(){
    $paises = [
        "Colombia"=> [ 
            "cap" => "Bogota",
            "mon" => "Peso",       
            "pob" => 51,
            "ciu" => [
                "Medellin",
                "Cali",
                "Pereira"
            ]
        ] ,
        "Brasil" => [
            "cap" => "Brasilia",
            "mon" => "Real",       
            "pob" => 40,
            "ciu" => [
                "Rio De Janeiro",
                "Sao Paulo",     
            ]
        ]
 ];  

return view('paises') 
->with('paises', $paises);

});
