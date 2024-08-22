<?php 

    $num = array();

    for($i = 0; $i < 10; $i++){

        $num[$i] = readline("Informe um número: ");

    }

    $menornumero = min($num);
    echo "O menor número é " . $menornumero . "\n";

    $maiorNumero = max($num);
    echo "O maior número é " . $maiorNumero . "\n";