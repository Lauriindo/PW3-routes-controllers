<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Date extends Controller
{
    //pode ser nulo --> null
    public function calculateYear ($year, $month = null , $day = null){
        $actualDate = new DateTime("now");
        $birthDate = new DateTime($year.$month.$day);
        $dateInterval = $birthDate->diff($actualDate);






        //diff faz a diferença da data atual para a data na url




        if($year > $actualDate->format('Y') || 
            $year == $actualDate->format('Y')
            && $month > $actualDate->format('m') || 
            $year == $actualDate->format('Y') &&
            $month == $actualDate->format('m') && 
            $day > $actualDate->format('d')) {
        echo "Não é possível calcular o intervalo de tempo em uma data futura";
        }

    elseif  
    ($year == $actualDate->format('Y') 
    && $month == $actualDate->format('m') 
    && $day==$actualDate->format('d')) 
    {
        echo "A data sugerida indica o dia de hoje";
    }
    elseif ($day == null || $month == null)
    {
        echo "Nasceu no Ano de: {$year}";
    }
    else {
        echo "Nasceu no dia:" ."$day/$month/$year";
        echo  "$dateInterval->format('%y')}} anos";
        echo  "$dateInterval->format('%m')}} meses"; 
        echo  "$dateInterval->format('%d')}} dias";
        echo "a data é $dateInterval";
    }
    }
}
