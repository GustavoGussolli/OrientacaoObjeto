<?php 

    class Prato{

        private string $descricao;
        private int $qtd;
        private float $valorUnitario;

        public function getValorTotal(){

            return $this->valorUnitario * $this->qtd;

        }

        

        /**
         * Get the value of descricao
         */
        public function getDescricao(): string
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         */
        public function setDescricao(string $descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }

        /**
         * Get the value of qtd
         */
        public function getQtd(): int
        {
                return $this->qtd;
        }

        /**
         * Set the value of qtd
         */
        public function setQtd(int $qtd): self
        {
                $this->qtd = $qtd;

                return $this;
        }

        /**
         * Get the value of valorUnitario
         */
        public function getValorUnitario(): float
        {
                return $this->valorUnitario;
        }

        /**
         * Set the value of valorUnitario
         */
        public function setValorUnitario(float $valorUnitario): self
        {
                $this->valorUnitario = $valorUnitario;

                return $this;
        }
    }

    $pratos = array();

    for ($i=0; $i < 3; $i++){ 

        $prato =  New Prato();
        $prato->setDescricao(readline("Informe a descrição do prato: "));
        $prato->setQtd(readline("Informe a quantidade de pratos: "));
        $prato->setValorUnitario(readline("Informe o valor unitario: "));

        array_push($pratos, $prato);
        
    }

    $valorTotal = 0;

    foreach ($pratos as $p){

        echo "Descrição do prato: " . $p->getDescricao() . "\n";
        echo "Quantidade de pratos: " . $p->getQtd() . "\n";
        echo "Valor unitario do prato: " . $p->getValorUnitario() . "\n";

        $valorTotal = $p->getValorTotal() + $valorTotal;
        
    }

    echo "Valor total para ser gasto na janta: R$" . $valorTotal . "\n";