<?php 

    class Retangulo{

        public $base;
        public $altura;

        function area(){

            $area = $this->altura * $this->base;
            echo "Área do rêtangulo é " . $area . "\n";
            
        }

        function perimetro(){

            $perimetro = $this->altura + $this->base + $this->altura + $this->base;
            echo "Perímetro do rêtangulo é " . $perimetro . "\n";

        }

    }

   $r1 = new Retangulo();
   $r1->base = readline("Informe a base: ");
   $r1->altura = readline("Informe a altura: ");
   $r1->area();
   $r1->perimetro();

   $r2 = new Retangulo();
   $r2->base = readline("Informe a base: ");
   $r2->altura = readline("Informe a altura: ");
   $r2->area();
   $r2->perimetro();

   $r3 = new Retangulo();
   $r3->base = readline("Informe a base: ");
   $r3->altura = readline("Informe a altura: ");
   $r3->area();
   $r3->perimetro();