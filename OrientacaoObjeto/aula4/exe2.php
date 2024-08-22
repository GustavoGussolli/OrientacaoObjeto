<?php 

    $vetor1 = array();
    $vetor2 = array();

    for ($i=0; $i < 5; $i++) { 
        $vetor1[$i] = readline("Digite palavras: ");
        $vetor2[$i] = $vetor1[$i];
    }

        for ($i=0; $i < 5; $i++) { 
            echo $vetor2[$i] . " , ";
        }