<?php 

    class Posto{

        private $litrosGasolina;
        private $abastecimentosGasolina;

        public function __construct(){
            
            $this->litrosGasolina = 0;
            $this->abastecimentosGasolina = array();
            
        }

        public function abastecer($litros){

            if($this->litrosGasolina >= $litros){

                return true;

            } else {
                return false;
            }
            
        }

        public function reporEstoque($litros){

            $this->litrosGasolina += $litros;

        }

        /**
         * Get the value of abastecimentosGasolina
         */
        public function getAbastecimentosGasolina()
        {
                return $this->abastecimentosGasolina;
        }

        /**
         * Set the value of abastecimentosGasolina
         */
        public function setAbastecimentosGasolina($abastecimentosGasolina): self
        {
                $this->abastecimentosGasolina = $abastecimentosGasolina;

                return $this;
        }
    }

    $posto = new Posto();

    $opcao = 0;
        do {

            echo "\n-----------MENU-----------\n";
            echo "1- Abastecer\n";
            echo "2- Repor estoque\n";
            echo "3- Listar abastecimentos\n";
            echo "0- SAIR\n";

        $opcao = readline("Escolha a opção: ");

        switch($opcao) {
            case 0:
                echo "Programa encerrado!\n";
                break;

            case 1:
                echo "Abastecer\n";
                $litros = readline("Informe quantos litros vai abastecer: ");
                $deuCerto = $posto->abastecer($litros);

                if($deuCerto == true){
                    echo "Abastecimento realizado com sucesso";
                } 

                if($deuCerto == false){
                    echo "Abastecimento não foi realizado com sucesso";
                }
                break;

             case 2:
                echo "Repor Estoque\n";
                $litros = readline("Informe quantos litros vai repor: ");
                $posto->reporEstoque($litros);
                break;

            case 3;
                echo "Listar abastecimentos \n";
                foreach ($this->abastecimentosGasolina as $a){
                    echo $a;
                }
                break;

            default:
                echo "Opção INVÁLIDA!\n";

     }
    } while($opcao != 0);