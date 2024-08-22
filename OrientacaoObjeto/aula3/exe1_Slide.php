<?php

    function fatorar($num1 , $numfatorado){
    
    while($num1 > 0){
        
        $numfatorado = $num1 * $numfatorado;
        $num1--;
        
        }
        return $numfatorado . " ";
    }   

        while(true){

        $num1 = readline("Informe um número: ");
        $numfatorado = 1;

        if($num1 == 0){
            die;
        }

        $fatorial = fatorar($num1, $numfatorado);
        echo $fatorial . "\n"; 
        
    }
