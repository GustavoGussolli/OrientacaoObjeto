<?php

    function area($base , $altura){

        $areaRetangulo = $base * $altura;

        return $areaRetangulo;

    }

    function perimetro($lado1, $lado2,$lado3,$lado4){

        $perimetro = $lado1 + $lado2 + $lado3 + $lado4;
        return $perimetro;

    }

    $b = 1;

    while($b <= 3){

    $base = readline("Informe a base do retangulo(cm): ");
    $altura = readline("Informe a altura do retangulo(cm): ");

    $lado1 = readline("Informe o primeiro lado(cm): ");
    $lado2 = readline("Informe o segundo lado(cm): ");
    $lado3 = readline("Informe o terceiro lado(cm): ");
    $lado4 = readline("Informe o quarto lado(cm): ");

    area($base , $altura);
    $area = area($base , $altura);
    echo "A área do " . $b .  "° retangulo é " . $area . " cm \n";

    perimetro($lado1, $lado2,$lado3,$lado4);
    $perimetro = perimetro($lado1, $lado2,$lado3,$lado4);
    echo "O perímetro do " . $b . "° do retangulo é " . $perimetro . " cm \n";

    $b++;
        
    }
