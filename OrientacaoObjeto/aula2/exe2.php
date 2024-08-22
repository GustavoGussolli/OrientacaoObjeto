<?php

    $valor = 0;

    for ($i=0; $i < 40; $i++) { 
        
        $valorPorPessoa = readline("Informe o valor: ");

        if ($valorPorPessoa == 0) {

            echo "Valor arrecadado foi de R$" . $valor;
            die;
        }
        $valor = $valorPorPessoa + $valor;
    }