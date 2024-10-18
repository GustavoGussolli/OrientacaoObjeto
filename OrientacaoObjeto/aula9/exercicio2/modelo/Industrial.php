<?php 

    require_once("IConsumidorEnergia.php");

    class Industrial implements IConsumidorEnergia{

        private $consumo;

        public function getValorFatura(){

            if ($this->consumo < 500){
                
                return "Valor da fatura: " . $this->consumo * 1.80 . "\n";

            } else {

                return "Valor da fatura: " . (($this->consumo - ($this->consumo-500)) * 1.80) +(($this->consumo-500) * 2.30) . "\n";

            }
        }


        /**
         * Get the value of consumo
         */
        public function getConsumo()
        {
                return $this->consumo;
        }

        /**
         * Set the value of consumo
         */
        public function setConsumo($consumo): self
        {
                $this->consumo = $consumo;

                return $this;
        }
    }