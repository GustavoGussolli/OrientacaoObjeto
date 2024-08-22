<?php

    function y($num){

        $funcao = 5 * $num + 2 * $num + 3;
        return $funcao;

    }

    $a = 0;

    while($a < 5){

        $num = readline("Informe o X: ");
        y($num);
        $funcao = y($num);
        echo "O valor de y é: " . $funcao . "\n";
        $a++;

    }
