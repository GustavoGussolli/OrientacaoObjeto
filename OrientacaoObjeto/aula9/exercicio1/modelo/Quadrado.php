<?php 

    require_once("IFormaGeometrica.php");

    class Quadrado implements IFormaGeometrica{

        private $lado;

        public function getArea(){

        return "Area do Quadrado: " . $this->lado + $this->lado + $this->lado + $this->lado . "\n";
            
        }


        public function getDesenho(){

        echo "┌───────────────────┐ \n";
        echo "│                   │\n";
        echo "│                   │\n";
        echo "│                   │\n";
        echo "│                   │\n";
        echo "│                   │\n";
        echo "│                   │\n";
        echo "│                   │\n";
        echo "│                   │\n";
        echo "│                   │\n";
        echo "│                   │\n";
        echo "└───────────────────┘\n";

        }

        /**
         * Get the value of lado
         */
        public function getLado()
        {
                return $this->lado;
        }

        /**
         * Set the value of lado
         */
        public function setLado($lado): self
        {
                $this->lado = $lado;

                return $this;
        }
    }