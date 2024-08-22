<?php

    $num1 = readline("Informe o número: ");
    $num2 = readline("Informe o número: ");

    while($num1 <= $num2){

        if($num1 % 5 == 0){

            echo $num1 . " ";

        }

        $num1++;
        
    }