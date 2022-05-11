<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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
                "cusco",
                "Arequipa",
                "Trujillo",
                "Huaraz"
            ]
        ],
        "Paraguay" => [
            "Capital" => "Asuncion",
            "Moneda" => "Guarani",
            "Poblacion" => 7.1,
            "Ciudades" => [
                "Encarnacion",
                "Villarica",
                "Luque",
                "Pilar",
                "Ita"
            ]
        ],
        "Chile" => [
            "Capital" => "Santiago de Chile",
            "Moneda" => "Peso Chileno",
            "Poblacion" => 7.1,
            "Ciudades" => [
                "Iquique",
                "Villarica",
                "Luque",
                "Pilar",
                "Ita"
            ]
        ],
        "Brazil" => [
            "Capital" => "Sao Paulo",
            "Moneda" => "Real brasileño",
            "Poblacion" => 7.1,
            "Ciudades" => [
                "Encarnacion",
                "Villarica",
                "Luque",
                "Pilar",
                "Ita"
            ]
        ]
        
    ];

    return view('paises')->with('paises',$paises);

});


Route::get('prueba',function(){

    return view('Productos.create');
});

/**
 * Rutas REST  Producto
 */
Route::resource( 'Productos',ProductoController::class );