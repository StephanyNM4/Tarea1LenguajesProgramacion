<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Operacion/{signo}/{operando1}/{operando2?}', function (string $signo, int $operando1, int $operando2=0) {
    $suma = 0;
    $resta = 0;
    $multiplicacion = 0;
    $division = 0;

    switch($signo){
        case "+": 
                if($operando2 != 0)
                        $suma = $operando1 + $operando2;
                else
                        $suma = $operando1 + $operando1;
                return "El total de la suma es: ".$suma;
                break;
        case "-": 
                if($operando2 != 0)
                        $resta = $operando1 - $operando2;
                else
                        $resta = $operando1 - $operando1;
                return "El total de la resta es: ".$resta;
                break;
        case "*": 
                if($operando2 != 0)
                        $multiplicacion = $operando1 * $operando2;
                else
                        $multiplicacion = $operando1 * $operando1;
                return "El total de la multiplicacion es: ".$multiplicacion;
                break;
        case "÷": 
                if($operando2 != 0)
                        $division = $operando1 / $operando2;
                else
                        $division = $operando1 / $operando1;
                return "El total de la division es: ".$division;
                break;
        }
});
