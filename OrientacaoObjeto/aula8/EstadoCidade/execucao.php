<?php

     require_once("modelo/Cidade.php");
     require_once("modelo/Cidade.php");

     $santaCatarina = new Estado();
     $santaCatarina->setNome("Santa Catarina");
     $santaCatarina->setSigla("SC");

     $parana = new Estado();
     $parana->setNome("Parana");
     $parana->setSigla("PR");

     $florianopolis = new Cidade();
     $florianopolis->setNome("Florianópolis");
     $florianopolis->setQtdHabitantes(537211);
     $florianopolis->setAltitude(3);
     $florianopolis->setEstado($santaCatarina);

     $blumenau = new Cidade();
     $blumenau->setNome("Blumenau");
     $blumenau->setQtdHabitantes(361855);
     $blumenau->setAltitude(21);
     $blumenau->setEstado($santaCatarina);


     $fozDoIguaçu = new Cidade();
     $fozDoIguaçu->setNome("Foz do Iguaçu");
     $fozDoIguaçu->setQtdHabitantes(258248);
     $fozDoIguaçu->setAltitude(192);
     $fozDoIguaçu->setEstado($parana);

     $cascavel = new Cidade();
     $cascavel->setNome("Cascavel");
     $cascavel->setQtdHabitantes(348051);
     $cascavel->setAltitude(781);
     $cascavel->setEstado($parana);
     

     $cidades = array($florianopolis, $blumenau, $fozDoIguaçu, $cascavel);

    //print_r($cidades);

    // Imprimir a mensagem para cada cidade

    foreach ($cidades as $c){

        printf("A cidade de " . $c->getNome() . ", localizada no estado " . $c->getEstado()->getNome(). "-" . 
        $c->getEstado()->getSigla() . ", possui " . $c->getQtdHabitantes()  . " habitantes e uma altitude de " . $c->getAltitude()  . " metros. \n");
        
    }
