<?php 

    $num = readline("Informe um número: ");

    if ($num > 0) {

        $num = $num * $num;
        echo $num . "\n";
        
    }

    if ($num < 0 ) {
        
        $num = $num * $num * $num;
        echo $num . "\n";

    }
