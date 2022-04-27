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



Route::get('hola',function(){
    echo "<center><h1>Hola</h1></center>";
} ); 

Route::get('arreglo',function(){
  $estudiantes = [
       "AN" => "Angie",
        "CO" => "Coja oficio"

    ];
                        /*echo "<pre>";
                        echo "<h1><center>";
                        var_dump($estudiantes);
                        echo "</h1></center>";
                        echo "<pre>";
                        echo "<hr />";
                        echo "<h1><center>";
                        $estudiantes = 1;
                        var_dump($estudiantes);
                        echo "</h1></center>";*/
    echo "<hr />";
    foreach($estudiantes as $e){
        echo $e;
        echo "<hr />";
    }
    

    unset( $estudiantes["AN"]);
    echo "<hr />";
    foreach($estudiantes as $e){
        echo $e;
        echo "<hr />";
    }
    unset( $estudiantes["CO"]);
    

    $estudiantes[]="Carlos";
    var_dump($estudiantes);

});



Route::get('paises',function(){
    $paises = [
        "Colombia" => [
            "Capital" => "Bogota",
            "Moneda" => "Peso",
            "Poblacion" => 50.88,
            "Ciudades" => [
                "Medellin",
                "Barranquilla",
                "Cali"
            ]
        ],
        "Peru" => [
            "Capital" => "Lima",
            "Moneda" => "Soles",
            "Poblacion" => 32.97,
            "Ciudades" => [
                "Medellin",
                "Barranquilla",
                "Cali"
            ]
        ],
        "Paraguay" => [
            "Capital" => "Asuncion",
            "Moneda" => "Guarani",
            "Poblacion" => 7.1,
            "Ciudades" => [
                "Medellin",
                "Barranquilla",
                "Cali"
            ]
        ]
        
    ];

    return view('paises')->with('paises',$paises);

});

Route::get('/tiendas/mostraregistro',[TiendaController::class, 'create']);
Route::post('/tiendas/mostrarexito',[TiendaController::class, 'store']);