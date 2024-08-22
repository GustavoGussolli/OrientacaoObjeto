<?php

function encontrarPessoaMaisVelha($pessoas) {
    $idadeMaisVelha = 0;
    $pessoaMaisVelha = array();

    foreach($pessoas as $pessoa) {
        if($pessoa['idade'] > $idadeMaisVelha) {
            $idadeMaisVelha = $pessoa['idade'];
            $pessoaMaisVelha = $pessoa;
        }
    }

    return $pessoaMaisVelha;
}

function exibirDadosPessoa($pessoa) {
    echo "Nome: " . $pessoa['nome'] . "\n";
    echo "Idade: " . $pessoa['idade'] . "\n";
    echo "Cidade Natal: " . $pessoa['cidadeNatal'] . "\n";
    echo "Profissão: " . $pessoa['profissao'] . "\n";
}

$pessoas = array(
    array('nome' => 'João', 'idade' => 25, 'cidadeNatal' => 'São Paulo', 'profissao' => 'Engenheiro'),
    array('nome' => 'Maria', 'idade' => 30, 'cidadeNatal' => 'Rio de Janeiro', 'profissao' => 'Médica'),
    array('nome' => 'Pedro', 'idade' => 35, 'cidadeNatal' => 'Curitiba', 'profissao' => 'Advogado'),
    array('nome' => 'Ana', 'idade' => 28, 'cidadeNatal' => 'Belo Horizonte', 'profissao' => 'Professor')
);

$pessoaMaisVelha = encontrarPessoaMaisVelha($pessoas);

echo "Dados da pessoa mais velha:\n";
exibirDadosPessoa($pessoaMaisVelha);
