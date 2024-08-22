<?php
    function numeroPrimo($num){

        for($i=2; $i < $num; $i++){ 
            if($num % $i == 0){
                
                return false;
            }

            return true;
        }
    
    }

    $vetor = array();
    $num = 1;

    while($num!= 0){

        $num = readline("Digite um número: ");

        if(numeroPrimo($num)){

            print($num . " é primo!\n");
            array_push($vetor,$num);

        } else {

            print($num .  " não é primo!\n");

        }
    }

    print("Esses são todos os números primos digitados: ");
    foreach ($vetor as $value) {

        print($value) . " , ";

    }