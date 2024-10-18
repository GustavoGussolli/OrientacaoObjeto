<?php 

    require_once("modelo/Circulo.php");
    require_once("modelo/Quadrado.php");
    require_once("modelo/Retangulo.php");

    for($i=0; $i < 3; $i++){

        $formaGeometrica = readline("Informe a forma geometrica: ");

        if($formaGeometrica == "circulo"){

            $circulo = new Circulo();
            $circulo->setRaio(readline("Informe o raio do criculo: "));
            echo $circulo->getArea();
            $circulo->getDesenho();
        }

        if($formaGeometrica == "retangulo"){

            $retangulo= new Retangulo();
            $retangulo->setAltura(readline("Informe altura do retangulo: "));
            $retangulo->setBase(readline("informe a base do retangulo: "));
            echo $retangulo->getArea();
            $retangulo->getDesenho();
        }

        if($formaGeometrica == "quadrado"){
           
            $quadrado= new Quadrado();
            $quadrado->setLado(readline("Informe o lado do quadrado: "));
            echo $quadrado->getArea();
            $quadrado->getDesenho();
        }
    }