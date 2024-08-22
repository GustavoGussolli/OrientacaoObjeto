<?php

    function dados($nome,$habitantes,$area, $altitude,$estado){

        echo $nome . " | " . $habitantes ." | ". $area ."Km² | ". $altitude . "m | ". $estado;

    }

    $nome = readline("Informe o nome: ");
    $habitantes = readline("Informe quantos habitantes há: ");
    $area = readline("Informe o tamanha da área: ");
    $altitude = readline("Informe a altitude: ");
    $estado = readline("Informe o estado: ");

    dados($nome,$habitantes,$area,$altitude,$estado);   
