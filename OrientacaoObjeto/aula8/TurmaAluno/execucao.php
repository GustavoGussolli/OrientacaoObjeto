<?php

    require_once("modelo/Aluno.php");
    require_once("modelo/Turma.php");

    $turma = new Turma();
    $turma->setNome("Turma A");
    $turma->setCurso("TDS");

    $aluno1 = new Aluno;
    $aluno1->setNome("Gustavo");
    $aluno1->setIdade(15);
    $aluno1->setTurma($turma);

    $aluno2 = new Aluno;
    $aluno2->setNome("João");
    $aluno2->setIdade(16);
    $aluno2->setTurma($turma);

    $aluno3 = new Aluno;
    $aluno3->setNome("Henrique");
    $aluno3->setIdade(14);
    $aluno3->setTurma($turma);

    $aluno4 = new Aluno;
    $aluno4->setNome("Kelvin");
    $aluno4->setIdade(18);
    $aluno4->setTurma($turma);

    $aluno5 = new Aluno;
    $aluno5->setNome("Vitor");
    $aluno5->setIdade(17);
    $aluno5->setTurma($turma);

    $alunos = array( $aluno1, $aluno2, $aluno3, $aluno4, $aluno5);

    //print_r($alunos);

    foreach ($alunos as $a){

        echo "Nome: " . $a->getNome() . " \nIdade: " . $a->getIdade() . "\n";
        
    }
