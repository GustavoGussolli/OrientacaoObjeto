<?php

    function media($a, $b,$c){

        $media = (($a * 3) + ($b * 5) + ($c * 2) ) / 10;
        return $media;;

    }

    $a = readline("Informe um número: ");
    $b = readline("Informe um número: ");
    $c = readline("Informe um número: ");

    media($a,$b,$c);    
    $media = media($a,$b,$c);
    echo $media;
