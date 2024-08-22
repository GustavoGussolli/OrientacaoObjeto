<?php

    function calculararea($raio1 , $raio2){

        $pi = 3.14;

        $area = $pi * $raio1 * $raio2;

        return $area;

    }

    function calcularcircuferenca($raio3){

        $pi = 3.14;

        $ciruferenca = $pi * 2 * $raio3;

        return $ciruferenca;

    } 

    $num = 1;

    while($num <= 3){
        $raio1 = readline("Informe o primeiro raio do círculo(cm) para calcular a área do círculo: ");
        $raio2 = readline("Informe o segundo raio do círculo(cm) para calcular a área do círculo: ");
        $raio3 = readline("Informe o raio do círculo(cm) para calcular a circunfêrencia do círculo: ");

        calculararea($raio1, $raio2);
        calcularcircuferenca($raio3);

        $areaCirculo = calculararea($raio1, $raio2);
        echo "A área do " . $num ."° círculo é " . $areaCirculo . "\n";
        $circuferenca = calcularcircuferenca($raio3);
        echo "A circunfêrencia do " . $num . "° círculo é " . $circuferenca . "\n";

        $num++;
    }
