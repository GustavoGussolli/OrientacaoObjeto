<?php 

    $turmas = array();

    for($i=1; $i <= 4; $i++){

        $turma = array();
        $turma["curso"] = readline("Informe o curso da turma " . $i . ": ");
        $turma["ano"] = readline("Informe o ano da turma " . $i . ": ");
        $turma["qtdalunos"] = readline("Informe a quantidade de alunos da turma " . $i . ": ");

        array_push($turmas, $turma);
      
    }

    //print_r($turmas);

    $totalAlunos = 0;

    foreach($turmas as $turma){

        $totalAlunos = $totalAlunos + $turma["qtdalunos"];
        
    }

    echo "O total de alunos é : " . $totalAlunos . "\n";