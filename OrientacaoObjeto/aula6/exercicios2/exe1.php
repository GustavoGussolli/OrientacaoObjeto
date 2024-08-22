<?php 


    class Produto{

        private $descricao;
        private $unidadeMedida;
        private $quantidade;
        private $valorUnitario;

        public function getValorTotal(){

            return $this->getDescricao() . " | " . $this->getunidadeMedida() . " | " . $this->getquantidade() . " x "
            . $this->getvalorUnitario() . " = " . $this->valorTotal() . "\n";

        }

        public function valorTotal(){

        $valorTotal = $this->getQuantidade() * $this->getValorUnitario();

        return $valorTotal;

        }



        /**
         * Get the value of descricao
         */
        public function getDescricao()
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         */
        public function setDescricao($descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }

        /**
         * Get the value of unidadeMedida
         */
        public function getUnidadeMedida()
        {
                return $this->unidadeMedida;
        }

        /**
         * Set the value of unidadeMedida
         */
        public function setUnidadeMedida($unidadeMedida): self
        {
                $this->unidadeMedida = $unidadeMedida;

                return $this;
        }

        /**
         * Get the value of quantidade
         */
        public function getQuantidade()
        {
                return $this->quantidade;
        }

        /**
         * Set the value of quantidade
         */
        public function setQuantidade($quantidade): self
        {
                $this->quantidade = $quantidade;

                return $this;
        }

        /**
         * Get the value of valorUnitario
         */
        public function getValorUnitario()
        {
                return $this->valorUnitario;
        }

        /**
         * Set the value of valorUnitario
         */
        public function setValorUnitario($valorUnitario): self
        {
                $this->valorUnitario = $valorUnitario;

                return $this;
        }
    }

    echo "Produto 1: \n";

    $p1 = new Produto();
    $p1->setDescricao(readline("Informe a discrição do produto: "));
    $p1->setUnidadeMedida(readline("Informe a unidade de medida: "));
    $p1->setQuantidade(readline("Informe a quantidade: "));
    $p1->setValorUnitario(readline("Informe o valor unitario: "));

    echo "Produto 2: \n";

    $p2 = new Produto();
    $p2->setDescricao(readline("Informe a discrição do produto: "));
    $p2->setUnidadeMedida(readline("Informe a unidade de medida: "));
    $p2->setQuantidade(readline("Informe a quantidade: "));
    $p2->setValorUnitario(readline("Informe o valor unitario: "));

    echo "Produto 3: \n";

    $p3 = new Produto();
    $p3->setDescricao(readline("Informe a discrição do produto: "));
    $p3->setUnidadeMedida(readline("Informe a unidade de medida: "));
    $p3->setQuantidade(readline("Informe a quantidade: "));
    $p3->setValorUnitario(readline("Informe o valor unitario: "));

    echo $p1->getValorTotal();
    echo $p2->getValorTotal();
    echo $p3->getValorTotal();

    if($p1->getQuantidade() * $p1->getValorUnitario() > $p2->getQuantidade() * $p2->getValorUnitario()){

        echo $p1->getDescricao() . "(" . $p1->getUnidadeMedida() . ") \n";
       
    }

    elseif($p2->getQuantidade() * $p2->getValorUnitario() > $p3->getQuantidade() * $p3->getValorUnitario()){

        echo $p2->getDescricao() . "(" . $p2->getUnidadeMedida() . ") \n";
       
    } else {

        echo $p3->getDescricao() . "(" . $p3->getUnidadeMedida() . ") \n";

    }

   