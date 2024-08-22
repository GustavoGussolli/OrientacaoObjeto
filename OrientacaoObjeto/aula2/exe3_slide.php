<?php


    for($i=0; $i < 5; $i++){ 


        $nome = readline("Informe o nome: ");
        $peso = readline("Informe o peso(em quilos): ");
        $altura = readline("Informe a altura(em metros): ");

        $alturavezes = 0;
        $imc = 0;
        

        $alturavezes = $altura * $altura;
        $imc = $peso / $alturavezes;

        printf("%s tem peso %dkg , altura %.2fM e IMC %.2f \n" , $nome , $peso , $altura , $imc);


    }
