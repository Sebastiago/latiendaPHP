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

//primera ruta en laravel
Route::get('hola',function(){ 
    echo "hola, te amo";
}   );

Route::get('arreglos' , function(){
    $estudiantes =["AN"=>"Ana","JU"=> "Juana", "PA"=>"Paola"];

    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
    echo"<hr />";
    //agregar posicion
    $estudiantes["CR"] = "Cristian";
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
    //retirar elementos de un arreglo
    echo"<hr />";
    unset($estudiantes["JU"]);
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
});

Route::get('paises', function(){
    $paises =["Colombia" =>["capital"=>" Bogota", "moneda"=>"Peso", "poblacion"=>51.6, "ciudades"=> ["Bogota", "Medellin","Cali"]], 
            "Peru" =>["capital"=>" Lima", "moneda"=>"Soles", "poblacion"=>32.96, "ciudades"=> ["Lima", "Cusco"]], 
            "Paraguay"=>["capital"=>" Asuncion", "moneda"=>"Guaranai", "poblacion"=>7.1, "ciudades"=> ["Luque", "Encarnacion"]]
            ];

            /*foreach($paises as $pais => $infopaises){
                echo "<h1> $pais </h1>";
            
            foreach($infopaises as $clave => $valor){
                echo "$clave : $valor<br/>";
            }
    

                echo "capital:" .$infopaises["capital"];
                echo "</br>";
                echo "moneda: " .$infopaises["moneda"];
                echo "</br>";
                echo "poblacion: " .$infopaises["poblacion"];
                echo "<hr />";*/


              //mostrar la vista   
                
                return view('paises')->with ("paises", $paises);
});