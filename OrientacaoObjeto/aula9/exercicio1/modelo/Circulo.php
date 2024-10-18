<?php 

    require_once("IFormaGeometrica.php");

    class Circulo implements IFormaGeometrica{

        private $raio;

        public function getArea(){

            return "Area do Circulo: ". 3.14 * $this->raio * $this->raio . "\n";

        }


        public function getDesenho(){

        echo"   xxxxxxxxxxxxx \n";
        echo"xxx             xxx  \n"; 
        echo"xx                 xx \n";
        echo"x                   x \n";
        echo"x                    x \n";
        echo"x                    x \n";
        echo"x                    x \n";
        echo"x                    x \n";
        echo"x                   x \n";
        echo"xx                 xx \n";
        echo"xxxx           xxxx  \n";
        echo"   xxxxxxxxxxxxx     \n";

        }

        /**
         * Get the value of raio
         */
        public function getRaio()
        {
                return $this->raio;
        }

        /**
         * Set the value of raio
         */
        public function setRaio($raio): self
        {
                $this->raio = $raio;

                return $this;
        }
    }