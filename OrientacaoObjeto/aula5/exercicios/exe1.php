<?php 

    class Animal{

        public $especie;
        public $qtdPatas;
        public $tipoPele;
        public $tipoSom;
        public $tipoMoviento;

        function emitirSom(){

            $this->tipoSom;
            echo "Som: " . $this->tipoSom . "\n";

        }

        function movimentar(){

            $this->tipoMoviento;
            echo "Movimento: " . $this->tipoMoviento . "\n";

        }
    }

        $a1 = new Animal();
        $a1->especie = readline("Informe a especie: ");
        $a1->qtdPatas = readline("Informe a quantidades de patas: ");
        $a1->tipoPele = readline("Informe o tipo de  pele: ");
        $a1->tipoSom = readline("Informe o som que o animal produz: ");
        $a1->tipoMoviento = readline("Informe o tipo de movimento ");

        $a2 = new Animal();
        $a2->especie = readline("Informe a especie: ");
        $a2->qtdPatas = readline("Informe a quantidades de patas: ");
        $a2->tipoPele = readline("Informe o tipo de  pele: ");
        $a2->tipoSom = readline("Informe o som que o animal produz: ");
        $a2->tipoMoviento = readline("Informe o tipo de movimento ");

        $a3 = new Animal();
        $a3->especie = readline("Informe a especie: ");
        $a3->qtdPatas = readline("Informe a quantidades de patas: ");
        $a3->tipoPele = readline("Informe o tipo de  pele: ");
        $a3->tipoSom = readline("Informe o som que o animal produz: ");
        $a3->tipoMoviento = readline("Informe o tipo de movimento ");

        $a4 = new Animal();
        $a4->especie = readline("Informe a especie: ");
        $a4->qtdPatas = readline("Informe a quantidades de patas: ");
        $a4->tipoPele = readline("Informe o tipo de  pele: ");
        $a4->tipoSom = readline("Informe o som que o animal produz: ");
        $a4->tipoMoviento = readline("Informe o tipo de movimento ");

        $a5 = new Animal();
        $a5->especie = readline("Informe a especie: ");
        $a5->qtdPatas = readline("Informe a quantidades de patas: ");
        $a5->tipoPele = readline("Informe o tipo de  pele: ");
        $a5->tipoSom = readline("Informe o som que o animal produz: ");
        $a5->tipoMoviento = readline("Informe o tipo de movimento ");

        echo "Animal 1: \n";

        echo "Especie: " . $a1->especie . "\n";
        echo "Quantidade de patas: " . $a1->qtdPatas . "\n";
        echo "Tipo de pele: " . $a1->tipoPele . "\n";

        $a1->emitirSom();
        $a1->movimentar();
        
        echo "Animal 2: \n";

        echo "Especie: " . $a2->especie . "\n";
        echo "Quantidade de patas: " . $a2->qtdPatas . "\n";
        echo "Tipo de pele: " . $a2->tipoPele . "\n";

        $a2->emitirSom();
        $a2->movimentar();

        echo "Animal 3: \n";

        echo "Especie: " . $a3->especie . "\n";
        echo "Quantidade de patas: " . $a3->qtdPatas . "\n";
        echo "Tipo de pele: " . $a3->tipoPele . "\n";

        $a3->emitirSom();
        $a3->movimentar();

        echo "Animal 4: \n";

        echo "Especie: " . $a4->especie . "\n";
        echo "Quantidade de patas: " . $a4->qtdPatas . "\n";
        echo "Tipo de pele: " . $a4->tipoPele . "\n";

        $a4->emitirSom();
        $a4->movimentar();

        echo "Animal 5: \n";

        echo "Especie: " . $a5->especie . "\n";
        echo "Quantidade de patas: " . $a5->qtdPatas . "\n";
        echo "Tipo de pele: " . $a5->tipoPele . "\n";

        $a5->emitirSom();
        $a5->movimentar();
