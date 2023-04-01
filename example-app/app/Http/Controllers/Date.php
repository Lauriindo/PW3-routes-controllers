<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Date extends Controller
{
    public function calculateYearSub (int $day1, int $month1, int $year1, int $day2, int $month2, int $year2){
        $d = $day1 - $day2;
        $m = $month1 - $month2;
        $y = $year1 - $year2;
        if($d > 31){
            "dia invalido";
        }
        else if($m > 12){
            "mês invalido";
        }
        else{ 
            echo " $d/$m/$y";
        }
    }
    public function calculateYearSum (int $day1, int $month1, int $year1, int $day2, int $month2, int $year2){
        $d = $day1 + $day2;
        $m = $month1 + $month2;
        $y = $year1 + $year2;
        if($d > 31){
            "dia invalido";
        }
        else if($m > 12){
            "mês invalido";
        }
        else if($y > 2023){
            "ano invalido";
        }
        else{ 
            echo " $d/$m/$y";
        }
    }
}
