<?php

    $A = array();
    $B = array();

    for($i=0; $i < 5; $i++){ 

        $A[$i] = readline("Informe o número do array A: ");
        $B[$i] = readline("Informe o número do array B: ");
    }

    $D = array_unique(array_merge($A, $B));

    $C = array_intersect($A, $B);

    if(!empty($C)){
        echo "Números semelhantes: ";
        echo implode(", ", $C);
        echo "\n";
    }  else {
        echo "Não há números semelhantes entre os arrays A e B \n";
    }
 
    echo "União do array A e B é : ";
    echo implode(", ", $D);