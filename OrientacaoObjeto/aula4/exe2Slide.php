<?php 

    $nome = array("Manuel de Medeiros", "Juliana de Amaral" , "Rodrigo Baidek" , "Fabíola da Silva");
    $endereco = array("Rua das Acácias","Rua dos pinheiros","Rua Dom Pedro I","Rua Chile");
    $cidade = array("Foz do Iguaçu","Florianópolis","Petrópolis","Guarulhos");
    $uf = array("PR","SC","RJ","SP");

    for ($i=0; $i < 4; $i++) { 
        
        echo $nome[$i] . " | ";
        echo $endereco[$i] . " | ";
        echo $cidade[$i] . " | ";
        echo $uf[$i] . " | ";
        echo "\n";
    }