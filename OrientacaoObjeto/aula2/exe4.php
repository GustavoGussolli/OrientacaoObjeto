<?php

    for ($i=0; $i < 10; $i++) { 
        
        $num = readline("Informe o número: ");


        if ($num % 2 == 0) {

            echo $num . " é par \n";
            
        }   else {
            
            echo $num . " é impar \n";

        }

    }