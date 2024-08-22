<?php 

    $num1 = readline("Informe o primeiro número: ");
    $num2 = readline("Informe o segundo número: ");
    $num3 = 0;

    while ($num1 > 0) {

        $num3 = $num3 + $num2;

        $num1 = $num1 -1;
        
    }

    echo $num3;