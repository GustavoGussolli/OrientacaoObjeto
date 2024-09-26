<?php

    require_once("modelo/Departamento.php");
    require_once("modelo/Funcionario.php");

    $listaFuncionario = array();

    for ($i=0; $i < 5; $i++){ 

        $f = new Funcionario();
        $f->setNome(readline("Informe o seu nome: "));
        $f->setCargo(readline("Informe seu cargo: "));
        $f->setSalario(readline("Informe o seu salario: "));

        $departamento = new Departamento();
        $departamento->setNome(readline("Informe o nome do Departamento: "));
        $departamento->setNumeroSala(readline("Informe o numero da sala: "));
        $f->setDepartamento($departamento);

        array_push($listaFuncionario, $f);
    }

    //print_r($listaFuncionario);

    foreach ($listaFuncionario as $funcionario){

        echo "--------------------------------------- \n";
        
        echo "Nome do Funcionario: " . $funcionario->getNome() . "\n";
        echo "Cargo do Funcionario: " .$funcionario->getCargo() . "\n";
        echo "Salario do Funcionario: " . $funcionario->getSalario() . "\n";
        echo "Numero do Departamento do Funcionario: " . $funcionario->getDepartamento()->getNumeroSala() . "\n";

        echo "--------------------------------------- \n";
    }
