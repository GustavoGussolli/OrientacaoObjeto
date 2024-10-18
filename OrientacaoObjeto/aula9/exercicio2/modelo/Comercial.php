<?php 

    require_once("IConsumidorEnergia.php");

    class Comercial implements IConsumidorEnergia{

        private $consumo;

        public function getValorFatura(){

            if ($this->consumo < 100){
                
                return "Valor da fatura: " . $this->consumo * 1.45 . "\n";

            } else {

                return "Valor da fatura: " . (($this->consumo-($this->consumo-100)) * 1.45) +(($this->consumo-100) * 1.60) . "\n";

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