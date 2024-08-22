<?php

    class Pokemon{

        public $nome;
        public $tipo;

        public $ataque;
        public $defesa;
        public $velocidade;

        public $nivel;
        public $pontosVida;
        public $experiencia;

        function __construct(){

            $this->nivel = 1;
            $this->pontosVida = 10;
            $this->experiencia = 0;
            
        }


        function batalhar(){

            $this->aumentarExperienca(5);

        }

        function aumentarNivel(){

            $this->nivel += 1; 
            $this->aumentarPontosVida();
            $this->experiencia = 0;

        }

        function aumentarPontosVida(){

            $this->pontosVida = $this->nivel * 10;

        }

        function aumentarExperienca($exp){

            $this->experiencia += $exp;

            if($this->experiencia >= 100){

                $this->aumentarNivel();

            }
        }

        function __toString(){

        $texto = "Nome = " . $this->nome . "\n";
        $texto .= "Tipo = " . $this->tipo . "\n";
        $texto .= "Nível = " . $this->nivel . "\n";
        $texto .= "Pontos de vida = " . $this->pontosVida . "\n";
        $texto .= "Experiencia = " . $this->experiencia . "\n";

        return $texto;

        }


    }

    $charmander = new Pokemon();
    $charmander->nome = "Charmander";
    $charmander->tipo = "Fogo";
    
    for($i=0; $i < 30; $i++){ 

        $charmander->batalhar();
    }

    //echo $charmander->dados();
    echo $charmander;

    $froakie = new Pokemon();
    $froakie->nome = "Froakie";
    $froakie->tipo = "Água";

    for($i=0; $i < 5; $i++){ 

        $froakie->batalhar();
    }

    echo "______________________ \n";
    echo $froakie;

