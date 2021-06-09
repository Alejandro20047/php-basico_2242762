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

//funcion anonima 
//callback
Route :: get('variables' , function(){
  //arreglo: estructura de datos
  $estudiantes = [ 'AN' => 'ana',
                   'MA' => 'maria',
                   'JO' => 'jorge'];
    
  echo "<pre>";
  var_dump($estudiantes);
  echo "</pre>";
});

Route:: get("paises",function(){

    $paises= [ "Colombia" => [
                               "capital"=> "Bogota",
                               "moneda" => "Peso",
                               "poblacion" => 51
                             ],
                "Peru" => [
                               "capital"=> "Lima",
                               "moneda" => "sol",
                               "poblacion" => 32.8

                             ],
                "Paraguay" =>[
                                "capital"=> "asuncion",
                                "moneda" => "Guara",
                                "poblacion" => 7.3
                    ]
                ];

    $suma = 0;
    foreach ($paises as $nombre => $pais){
        $suma += $pais ["poblacion"];
    }
    echo "La suma de los paises es $suma";
});

