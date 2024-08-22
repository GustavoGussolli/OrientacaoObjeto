<?php 

    class Retangulo{

        public $base;
        public $altura;

        function __construct($a=0, $b=0)
        {
            $this->base = $b;
            $this->altura = $a;
        }

        function area(){

            return $this->altura * $this->base;
            
        }

        function perimetro(){

            return $this->altura + $this->base +$this->altura + $this->base;

        }

    }

    for ($i=0; $i < 3; $i++){
        
        $base = readline("Informe a base: ");
        $altura = readline("Informe a altura: ");
    
        $ret = new Retangulo($altura, $base);
        echo "Área do rêtangulo é " . $ret->area() . "\n";
        echo "Perímetro do rêtangulo é " . $ret->perimetro() . "\n";
        
    }