<?php 

    class Carro{

        private $modelo;
        private $marca;
        private $anoFabricacao;
        private $velocidadeMax;

        

        /**
         * Get the value of modelo
         */
        public function getModelo()
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         */
        public function setModelo($modelo): self
        {
                $this->modelo = $modelo;

                return $this;
        }

        /**
         * Get the value of marca
         */
        public function getMarca()
        {
                return $this->marca;
        }

        /**
         * Set the value of marca
         */
        public function setMarca($marca): self
        {
                $this->marca = $marca;

                return $this;
        }

        /**
         * Get the value of anoFabricacao
         */
        public function getAnoFabricacao()
        {
                return $this->anoFabricacao;
        }

        /**
         * Set the value of anoFabricacao
         */
        public function setAnoFabricacao($anoFabricacao): self
        {
                $this->anoFabricacao = $anoFabricacao;

                return $this;
        }

        /**
         * Get the value of velocidadeMax
         */
        public function getVelocidadeMax()
        {
                return $this->velocidadeMax;
        }

        /**
         * Set the value of velocidadeMax
         */
        public function setVelocidadeMax($velocidadeMax): self
        {
                $this->velocidadeMax = $velocidadeMax;

                return $this;
        }
    }

    echo "\n ---CARRO 1--- \n";

    $c1 = new Carro();
    $c1->setMarca(readline("Informe a marca do carro: "));
    $c1->setModelo(readline("Informe o modelo do carro: "));
    $c1->setAnoFabricacao(readline("Informe o ano de fabricação: "));
    $c1->setVelocidadeMax(readline("Informe a velocidade maxima do carro: "));

    echo "\n ---CARRO 2--- \n";

    $c2 = new Carro();
    $c2->setMarca(readline("Informe a marca do carro: "));
    $c2->setModelo(readline("Informe o modelo do carro: "));
    $c2->setAnoFabricacao(readline("Informe o ano de fabricação: "));
    $c2->setVelocidadeMax(readline("Informe a velocidade maxima do carro: "));


    echo "\n ---CARRO 3--- \n";

    $c3 = new Carro();
    $c3->setMarca(readline("Informe a marca do carro: "));
    $c3->setModelo(readline("Informe o modelo do carro: "));
    $c3->setAnoFabricacao(readline("Informe o ano de fabricação: "));
    $c3->setVelocidadeMax(readline("Informe a velocidade maxima do carro: "));

    if($c1->getVelocidadeMax() > $c2->getVelocidadeMax()){

        if($c1->getVelocidadeMax() > $c3->getVelocidadeMax()){

            echo "O carro mais rápido é: " . $c1->getModelo() . "-" . $c1->getMarca() . ", fabricado em " . $c1->getAnoFabricacao() . ", com velocidade máxima de " . $c1->getVelocidadeMax() . " km/h.\n";

            if($c2->getVelocidadeMax() > $c3->getVelocidadeMax()){

                echo "O carro menos rápido é: " . $c3->getModelo() . "-" . $c3->getMarca() . ", fabricado em " . $c3->getAnoFabricacao() . ", com velocidade máxima de " . $c3->getVelocidadeMax() . " km/h.\n";
                
            } else {

                echo "O carro menos rápido é: " . $c2->getModelo() . "-" . $c2->getMarca() . ", fabricado em " . $c2->getAnoFabricacao() . ", com velocidade máxima de " . $c2->getVelocidadeMax() . " km/h. \n";

            }

        }

    }

    if($c2->getVelocidadeMax() > $c1->getVelocidadeMax()){

        if($c2->getVelocidadeMax() > $c3->getVelocidadeMax()){

            echo "O carro mais rápido é: " . $c2->getModelo() . "-" . $c2->getMarca() . ", fabricado em " . $c2->getAnoFabricacao() . ", com velocidade máxima de " . $c2->getVelocidadeMax() . " km/h. \n";

            if($c1->getVelocidadeMax() > $c3->getVelocidadeMax()){

                echo "O carro menos rápido é: " . $c3->getModelo() . "-" . $c3->getMarca() . ", fabricado em " . $c3->getAnoFabricacao() . ", com velocidade máxima de " . $c3->getVelocidadeMax() . " km/h. \n";
                
            } else {

                echo "O carro menos rápido é: " . $c1->getModelo() . "-" . $c1->getMarca() . ", fabricado em " . $c1->getAnoFabricacao() . ", com velocidade máxima de " . $c1->getVelocidadeMax() . " km/h. \n";

            }

        }

    }

    if($c3->getVelocidadeMax() > $c1->getVelocidadeMax()){

        if($c3->getVelocidadeMax() > $c2->getVelocidadeMax()){

            echo "O carro mais rápido é: " . $c3->getModelo() . "-" . $c3->getMarca() . ", fabricado em " . $c3->getAnoFabricacao() . ", com velocidade máxima de " . $c3->getVelocidadeMax() . " km/h. \n";

            if($c1->getVelocidadeMax() > $c2->getVelocidadeMax()){

                echo "O carro menos rápido é: " . $c2->getModelo() . "-" . $c2->getMarca() . ", fabricado em " . $c2->getAnoFabricacao() . ", com velocidade máxima de " . $c2->getVelocidadeMax() . " km/h. \n";
                
            } else {

                echo "O carro menos rápido é: " . $c1->getModelo() . "-" . $c1->getMarca() . ", fabricado em " . $c1->getAnoFabricacao() . ", com velocidade máxima de " . $c1->getVelocidadeMax() . " km/h. \n";

            }

        }

    }