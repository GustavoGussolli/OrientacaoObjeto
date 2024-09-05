<?php 

    class Trapezio{

        private $baseMaior;
        private $baseMenor; 
        private $altura;

        
        public function area(){


            return (($this->getBaseMaior() + $this->getBaseMenor()) * $this->getAltura())/2;
        }

        /**
         * Get the value of baseMaior
         */
        public function getBaseMaior()
        {
                return $this->baseMaior;
        }

        /**
         * Set the value of baseMaior
         */
        public function setBaseMaior($baseMaior): self
        {
                $this->baseMaior = $baseMaior;

                return $this;
        }

        /**
         * Get the value of baseMenor
         */
        public function getBaseMenor()
        {
                return $this->baseMenor;
        }

        /**
         * Set the value of baseMenor
         */
        public function setBaseMenor($baseMenor): self
        {
                $this->baseMenor = $baseMenor;

                return $this;
        }

        /**
         * Get the value of altura
         */
        public function getAltura()
        {
                return $this->altura;
        }

        /**
         * Set the value of altura
         */
        public function setAltura($altura): self
        {
                $this->altura = $altura;

                return $this;
        }
    }

    $trapezios = array();

    for ($i=0; $i < 4; $i++) { 
       

        $trapezio = new Trapezio();
        $trapezio->setBaseMaior(readline("Informe a base maior do trapézio: "));
        $trapezio->setBaseMenor(readline("Informe a base menor do trapézio: "));
        $trapezio->setAltura(readline("Informe a altura do trapézio: "));

        array_push($trapezios, $trapezio);
    }

    foreach ($trapezios as $trap){

        if($trap->area() >= $trapezios[0]->area()){

            if($trap->area() >= $trapezios[1]->area()){

                if($trap->area() >= $trapezios[2]->area()){
                
                    if($trap->area() >= $trapezios[3]->area()){

                        echo "Informações do trapézio com maior área: \n";

                        echo "Base maior: " . $trap->getBaseMaior() . "\n";
                        echo "Base menor: " . $trap->getBaseMenor() . "\n";
                        echo "Altura: " . $trap->getAltura() . "\n";
                
                    }

                }
                
            }
            
        }
        
    }