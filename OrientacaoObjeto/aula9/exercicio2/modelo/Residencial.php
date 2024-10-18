<?php 

    require_once("IConsumidorEnergia.php");

    class Residencial implements IConsumidorEnergia{

        private $consumo;

        public function getValorFatura(){
                
        return "Valor da fatura: " . $this->consumo * 1.05 . "\n";

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