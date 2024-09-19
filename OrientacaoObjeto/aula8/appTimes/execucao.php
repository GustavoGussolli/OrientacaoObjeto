<?php 

    require_once("modelo/Time.php");
    require_once("modelo/Jogador.php");

    //1- Criar um objeto time

    $time = new Time();
    $time->setNome("Corinthians");
    $time->setCidade("São Paulo");
    print_r($time);

    //2- Criar o objeto Jogador

    $garo = new Jogador();
    $garo->setNome("Garo");
    $garo->setNumero(10);
    $garo->setTime($time);
    //print_r($garo);

    //2- Criar o objeto Jogador

    $romero = new Jogador();
    $romero->setNome("Romero");
    $romero->setNumero(11);
    $romero->setTime($time);
   

    //3- Imprimir o nome do time do jogador Garo

   // echo $garo->getTime()->getNome() . "\n";
    //$t = $garo->getTime();
    //echo $t->getCidade() . "\n";

    $jogadores = array();
    array_push($jogadores, $garo);
    array_push($jogadores, $romero);
    print_r($jogadores);