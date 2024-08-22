<?php

    class Cidade{

        private $populacao;
        private $area;
        private $nome;

        private $aumentarArea;
        private $aumentarpopulacao;
        private $mudaroNome;

        public function aumentarArea(){

            $this->setAumentarArea(readline("Informe quanto aumentou a area da cidade: "));

                return "A cidade agora tem " . $this->getArea() + $this->getAumentarArea() . " de area \n";

            }

        public function aumentarPopulacao(){

            $this->setAumentarpopulacao(readline("Informe quanto aumentou a população da cidade: "));

            return "Agora a cidade tem " . $this->getPopulacao() + $this->getaumentarpopulacao() . " de população \n";

        }

        public function mudarNome(){

            $this->setMudaroNome(readline("Informe o novo nome da cidade: "));
            $this->setNome($this->getMudaroNome());

            return "O novo nome da cidade é: " . $this->getNome() . "\n";

        }


        

        /**
         * Get the value of populacao
         */
        public function getPopulacao()
        {
                return $this->populacao;
        }

        /**
         * Set the value of populacao
         */
        public function setPopulacao($populacao): self
        {
                $this->populacao = $populacao;

                return $this;
        }

        /**
         * Get the value of area
         */
        public function getArea()
        {
                return $this->area;
        }

        /**
         * Set the value of area
         */
        public function setArea($area): self
        {
                $this->area = $area;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of aumentarArea
         */
        public function getAumentarArea()
        {
                return $this->aumentarArea;
        }

        /**
         * Set the value of aumentarArea
         */
        public function setAumentarArea($aumentarArea): self
        {
                $this->aumentarArea = $aumentarArea;

                return $this;
        }

        /**
         * Get the value of aumentarpopulacao
         */
        public function getAumentarpopulacao()
        {
                return $this->aumentarpopulacao;
        }

        /**
         * Set the value of aumentarpopulacao
         */
        public function setAumentarpopulacao($aumentarpopulacao): self
        {
                $this->aumentarpopulacao = $aumentarpopulacao;

                return $this;
        }

        /**
         * Get the value of mudaroNome
         */
        public function getMudaroNome()
        {
                return $this->mudaroNome;
        }

        /**
         * Set the value of mudaroNome
         */
        public function setMudaroNome($mudaroNome): self
        {
                $this->mudaroNome = $mudaroNome;

                return $this;
        }


    }

    for($i=1; $i <= 2; $i++){ 

        echo "_____________________________ \n \n";
        echo "Cidade " . $i . ": \n";

        $cidade = new Cidade();
        $cidade->setNome(readline("Informe o Nome da cidade: "));
        $cidade->setArea(readline("Informe a area da cidade: "));
        $cidade->setPopulacao(readline("Informe a quantidade de habitantes da cidade: "));
    
        echo $cidade->aumentarArea();
        echo $cidade->aumentarPopulacao();
        echo $cidade->mudarNome();
        
    }

