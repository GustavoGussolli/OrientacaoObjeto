<?php

    function ParOuImpar($num){

        if($num % 2 == 0){
            return true;
        } else{
            return false;
        }

    }
    
    while (true){
        $num = readline("Informe um número: ");

        if($num == 0){
            die;
        }

        ParOuImpar($num);
        $ParOuImpar = ParOuImpar($num);


        if($ParOuImpar == true){

           echo "O número " . $num . " é par \n";
        }

        if ($ParOuImpar == false) {
            echo "O número " . $num . " é impar \n";
        }

    }