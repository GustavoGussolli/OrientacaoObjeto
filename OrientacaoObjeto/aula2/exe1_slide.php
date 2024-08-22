<?php 

    $vezes = 0;

    for($vezes=0; $vezes < 10; $vezes++) { 


        $num = readline("Informe um número: ");

        if ($num > 0 ) {
            echo $num . " é positivo \n";

        }

        else {
            echo $num . " é negativo \n";

        }

        if ($num == 0) {
            echo "Esse número é neutro \n";
        }
    }
