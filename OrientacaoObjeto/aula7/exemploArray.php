<?php

    class Robo{

        private string $nome;
        private string $tipo;
        private int $Qtdsensores;

        //Metodos

     /*   public function __construct($n="", $t="", $qtds=""){

            $this->getNome() = $n;
            $this->getTipo() = $t;
            $this->getQtdsensores() = $qtds;
        }*/

        function __toString(){

            return $this->getNome() . " - " . $this->getTipo() .  "\n";

        }


        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of tipo
         */
        public function getTipo(): string
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         */
        public function setTipo(string $tipo): self
        {
                $this->tipo = $tipo;

                return $this;
        }

        /**
         * Get the value of Qtdsensores
         */
        public function getQtdsensores(): int
        {
                return $this->Qtdsensores;
        }

        /**
         * Set the value of Qtdsensores
         */
        public function setQtdsensores(int $Qtdsensores): self
        {
                $this->Qtdsensores = $Qtdsensores;

                return $this;
        }
    }


    //Programa principal

    $robo1 = new Robo();
    $robo1->setNome("Maquina Mistério")
          ->setTipo("Arduino")
          ->setQtdsensores(4);

    $robo2 = new Robo();
    $robo2->setNome("Charles Lecrash")
          ->setTipo("Lego")
          ->setQtdsensores(2);


    $robo3 = new Robo();
    $robo3->setNome("Juliete")
          ->setTipo("Arduino")
          ->setQtdsensores(3);

    $robos = array($robo1, $robo2);
    // echo $robos[1]->getNome() . "\n";

    array_push($robos, $robo3);
    //echo $robos[2]->getNome() . "\n";
    // echo $robos[2];

    //Laço for

   /* for ($i=0; $i < count($robos); $i++){ 

        echo $robos[$i]->getNome() . "\n";
       
    } */ 

    array_push($robos, new Robo("Laercio", "Arduino" , 3));

    //Laço foreach

    foreach ($robos as $r){
        
        echo $r->getNome() . "\n";

    }
    
    $algumRobo = $robos[3];
    echo $algumRobo->getTipo() . "\n";
    echo $robos[3]->getTipo() . "\n";