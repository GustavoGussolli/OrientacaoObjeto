<?php 

    class Veiculo{

        private $capacidade;
        private $passagensVendidas ;

        public $veiculo;
        public $venderPassagem;
        

        public function venderPassagem($carro){

            if($carro->getVenderPassagem() == 0){
                die;
            }

            if($carro->getCapacidade() >= $carro->getVenderPassagem()){

                return true;
               
            } else {
                return false;
            }

        }
        
                /**
         * Get the value of capacidade
         */
        public function getCapacidade()
        {
                return $this->capacidade;
        }

        /**
         * Set the value of capacidade
         */
        public function setCapacidade($capacidade): self
        {
                $this->capacidade = $capacidade;

                return $this;
        }

        /**
         * Get the value of passagensVendidas
         */
        public function getPassagensVendidas()
        {
                return $this->passagensVendidas;
        }

        /**
         * Set the value of passagensVendidas
         */
        public function setPassagensVendidas($passagensVendidas): self
        {
                $this->passagensVendidas = $passagensVendidas;

                return $this;
        }

        /**
         * Get the value of veiculo
         */
        public function getVeiculo()
        {
                return $this->veiculo;
        }

        /**
         * Set the value of veiculo
         */
        public function setVeiculo($veiculo): self
        {
                $this->veiculo = $veiculo;

                return $this;
        }

        /**
         * Get the value of venderPassagem
         */
        public function getVenderPassagem()
        {
                return $this->venderPassagem;
        }

        /**
         * Set the value of venderPassagem
         */
        public function setVenderPassagem($venderPassagem): self
        {
                $this->venderPassagem = $venderPassagem;

                return $this;
        }
    }

    $carro = new Veiculo();
    $carro->setCapacidade(readline("Informe a capacidade do veiculo: "));
    $carro->setvenderPassagem(readline("Informe a quantidade de passagens que deseja comprar: "));

    $carro->venderPassagem($carro);

    if($carro->venderPassagem($carro) == true){

        echo "Venda concluida";
        
    } else{
        echo "Venda não concluida";
    }   