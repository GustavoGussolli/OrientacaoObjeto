<?php

function Numprimo($num){
    if($num <= 1){
        return false;
    } elseif($num <= 3){
        return true;
    }
    elseif($num % 2 == 0 || $num % 3 == 0){
        return false;
    }
    $i = 5;
    while($i * $i <= $num){
        if ($num % $i == 0 || $num % ($i + 2) == 0){
            return false;
        }
        $i += 6;
    }
    return true;
}


    while(true){
 
    $numero = readline("Digite um número: ");

    if ($numero < 2) {
        die;
    }

    if(Numprimo($numero)){
        echo $numero . " é um número primo\n";
    } else {
        echo $numero . " não é um número primo\n";
    }
}
