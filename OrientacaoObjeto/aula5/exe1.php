<?php

    class Pessoa{

        public $nome;
        public $endereco;
        public $cidade;
        public $uf;
        public $altura;

        function falarOla(){
            echo "Olá mundo, sou " . $this->nome . "\n";
        }

        function falarEndereco(){
            echo "Moro em " . $this->endereco . ", " . $this->cidade . "/" . $this->uf .  "! \n";
        }

        function falarAltura(){
            echo "Tenho " . $this->altura . " metros! \n";
        }

    }
    
    $pessoa1 = new Pessoa();
    $pessoa1->nome = readline("Informe o nome: ");
    $pessoa1->endereco = readline("Informe o endereço: ");
    $pessoa1->cidade = readline("Informe a cidade: ");
    $pessoa1->uf = readline("Informe o UF: ");
    $pessoa1->altura = readline("Informe a altura: ");

    $pessoa1->falarOla();
    $pessoa1->falarEndereco();
    $pessoa1->falarAltura();