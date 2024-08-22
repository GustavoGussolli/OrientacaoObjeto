<?php 

    $num = array();
    $arimetrica = 0;

    for ($i=0; $i < 10; $i++) { 
        $num[$i] = readline("Digite um número: ");
        $arimetrica = $num[$i] + $arimetrica; 

    }

    echo "A média arimétrica é " . $arimetrica/10 . "\n";



