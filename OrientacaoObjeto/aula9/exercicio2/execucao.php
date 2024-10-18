<?php 

    require_once("modelo/Industrial.php");
    require_once("modelo/Comercial.php");
    require_once("modelo/Residencial.php");

    for($i=0; $i < 3; $i++){
        
        $local = readline("Informe o tipo de local: ");

        if($local == "Residencial"){

            $residencial = new Residencial();
            $residencial->setConsumo(readline("Informe a quantidade de kHw: "));
            echo $residencial->getValorFatura();
            
        }

        if($local == "Comercial"){

            $comercial = new Comercial();
            $comercial->setConsumo(readline("Informe a quantidade de kHw: "));
            echo $comercial->getValorFatura();
        }

        if($local == "Industrial"){

            $industrial = new Industrial();
            $industrial->setConsumo(readline("Informe a quantidade de kHw: "));
            echo $industrial->getValorFatura();
            
        }
        
    }