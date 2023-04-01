<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Operations extends Controller
{
    public function sum(int $value1, int $value2){
        $result = $value1 + $value2;
        echo "O resultado da soma entre os números são: $result";
    }
    public function subtraction(int $value1, int $value2){
        $result = $value1 - $value2;
        echo "O resultado da subtração entre os números são: $result";
    }
    public function division(int $value1, int $value2){
        $result = $value1 / $value2;
        echo "O resultado da divisão entre os números são: $result";
    }
    public function multiplication(int $value1, int $value2){
        $result = $value1 * $value2;
        echo "O resultado da multiplicação entre os números são: $result";
    }
    public function all(int $value1, int $value2){
        $sum = $value1 + $value2;
        $sub = $value1 - $value2;
        $div = $value1 / $value2;
        $mult = $value1 * $value2;
        echo "O resultado da soma entre os números são: $sum <br>";
        echo "O resultado da subtração entre os números são: $sub <br>";
        echo "O resultado da divisão entre os números são: $div <br>";
        echo "O resultado da multiplicação entre os números são: $mult";
    }
}

