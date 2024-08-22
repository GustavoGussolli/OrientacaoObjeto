<?php 

    class Calculadora{

        private $num1;
        private $num2;

        public function mostrarSaida(){

            return "-Números lidos: numA = " .
            $this->getNum1() . " numB = " . $this->getNum2().
            "\n-Saída: \n Soma: " . $this->soma() . "\n" .
            "Subtração: " . $this->subtracao(). "\n" . 
            "Multiplicação: " . $this->multiplicacao() . "\n" .
            "Divisão: " . $this->divisao() . "\n"  .
            "Resto: " . $this->resto() . "\n";

        }

        private function soma(){

            return $soma = $this->getNum1() + $this->getNum2();

        }

        private function subtracao(){

                return $soma = $this->getNum1() - $this->getNum2();

        }

        private function multiplicacao(){

                return $soma = $this->getNum1() * $this->getNum2();

        }

        private function divisao(){

                return $soma = floor($this->getNum1() / $this->getNum2());

        }
        
        private function resto(){

                return $soma = $this->getNum1() % $this->getNum2();

        }


        /**
         * Get the value of num1
         */
        public function getNum1()
        {
                return $this->num1;
        }

        /**
         * Set the value of num1
         */
        public function setNum1($num1): self
        {
                $this->num1 = $num1;

                return $this;
        }

        /**
         * Get the value of num2
         */
        public function getNum2()
        {
                return $this->num2;
        }

        /**
         * Set the value of num2
         */
        public function setNum2($num2): self
        {
                $this->num2 = $num2;

                return $this;
        }
    }

    $n = new Calculadora();
    $n->setNum1(readline("Informe o Primeiro número: "));
    $n->setNum2(readline("Informe o Segundo número: "));

    echo $n->mostrarSaida();