<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Name extends Controller
{
    public function name (string $name){
        echo "Olá seja bem vindo <br>";
        echo ($name);
    }
}

