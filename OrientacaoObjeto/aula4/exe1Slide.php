<?php  

    $nome = array("Gustavo" , "Fernanda" , "Valdinei" , "Larissa" , "Vinicius");
    $idade = array (15 , 44 , 46 , 11 , 24);
    $altura = array(1.80 , 1.70 , 1.82 , 1.50 , 1.76);
    $kg = array(82 , 79 , 110 , 70 , 78);

    for($i=0; $i < 5; $i++){ 

        echo $nome[$i] . " | ";
        echo $idade[$i] . " Anos | ";
        echo $altura[$i] . " Cm | ";
        echo $kg[$i] . "Kg | ";

        echo "\n";
        
    }