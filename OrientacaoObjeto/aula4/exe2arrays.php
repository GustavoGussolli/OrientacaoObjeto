<?php 

    function vetor1($vetorA){

        $vetor1 = array();

        for($i=0; $i < 5; $i++){ 
            
            $num1 = $vetorA[$i] * 1.8 + 32;
            array_push($vetor1 , $num1);
        }

        return $vetor1;

    }

    function vetor2($vetorA){

        $vetor2 = array();

        foreach($vetorA as $valor){

            $fatorial  = $valor;

                if($valor >= 1){

                    for($i = $valor -1; $i > 1; $i--){

                        $fatorial *= $i;

                    }
                } else {

                    $fatorial = 0;

                }

                array_push($vetor2,$fatorial);

        }
        
       return $vetor2;
        
    }

    function vetor3($vetorA){

        $numcalcu = 0;
        $vetor3 = array();

        for($i=0; $i < 5; $i++){ 
            
            $numcalcu = ($vetorA[$i] * $vetorA[$i] + 2 * $vetorA[$i] + 4) / 2 * $vetorA[$i];
            array_push($vetor3,$numcalcu);

        }

        return $vetor3;

    }


    $vetorA = array();

    for($i=0; $i < 5; $i++){ 
        
        $num = readline("Informe um numero: ");
        array_push($vetorA , $num);

    }

    vetor1($vetorA);
    $vetor1 = vetor1($vetorA);

    echo "Vetor 1 : ";

    foreach($vetor1 as $var1) {
        
        echo $var1 . " , ";
    }

    echo "\n";

    vetor2($vetorA);
    $vetor2 = vetor2($vetorA);

    echo "Vetor 2 : ";

    foreach($vetor2 as $var2) {
        
        echo $var2 . " , ";
    }


    echo "\n";

    vetor3($vetorA);
    $vetor3 = vetor3($vetorA);

    echo "Vetor 3 : ";

    foreach ($vetor3 as $var3) {
        
        echo $var3 . " , ";
    }
