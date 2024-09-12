<?php 

    class Receita{

        private string $descricaoReceita;
        private float $valorReceita;

        public function __toString(){

            return sprintf("%s,%d\n",
            $this->descricaoReceita, $this->valorReceita);
            
        }

        
        /**
         * Get the value of descricaoReceita
         */
        public function getDescricaoReceita(): string
        {
                return $this->descricaoReceita;
        }

        /**
         * Set the value of descricaoReceita
         */
        public function setDescricaoReceita(string $descricaoReceita): self
        {
                $this->descricaoReceita = $descricaoReceita;

                return $this;
        }

        /**
         * Get the value of valorReceita
         */
        public function getValorReceita(): float
        {
                return $this->valorReceita;
        }

        /**
         * Set the value of valorReceita
         */
        public function setValorReceita(float $valorReceita): self
        {
                $this->valorReceita = $valorReceita;

                return $this;
        }


    }

    class Despesa{

        private string $descricaoDespesa;
        private float $valorDespesa;

        public function adcionarDespesa(){

        }


        /**
         * Get the value of descricaoDespesa
         */
        public function getDescricaoDespesa(): string
        {
                return $this->descricaoDespesa;
        }

        /**
         * Set the value of descricaoDespesa
         */
        public function setDescricaoDespesa(string $descricaoDespesa): self
        {
                $this->descricaoDespesa = $descricaoDespesa;

                return $this;
        }

        /**
         * Get the value of valorDespesa
         */
        public function getValorDespesa(): float
        {
                return $this->valorDespesa;
        }

        /**
         * Set the value of valorDespesa
         */
        public function setValorDespesa(float $valorDespesa): self
        {
                $this->valorDespesa = $valorDespesa;

                return $this;
        }
    }

    $arrayReceita = array();
    $arrayDespesa = array();

    do {

        echo "\n-----------MENU-----------\n";
        echo "1- Adicionar receita\n";
        echo "2- Adicionar despesa\n";
        echo "3- Listar receitas\n";        
        echo "4- Listar despesas\n";
        echo "5- Sumarizar\n";

        echo "0- Sair\n";
    
        $opcao = readline("Informe a opção: ");
        echo "\n";

        switch ($opcao) {

            case '1':
                echo "Adicionar receita \n";

                $receita = new Receita();
                $receita->setDescricaoReceita(readline("Informe a descrição da receita: "));
                $receita->setValorReceita(readline("Informe o valor da receita:"));

                array_push($arrayReceita, $receita);
                
                break;

            case '2':

                echo "Adicionar despesa \n";
               
                $despesa = new Despesa();
                $despesa->setDescricaoDespesa(readline("Informe a descrição da despesa: "));
                $despesa->setValorDespesa(readline("Informe o valor da despesa:"));

                array_push($arrayDespesa, $despesa);

                break;

            case '3':
                echo "Listar receita \n";

                $i = 1;
                foreach ($arrayReceita as $r){
                    echo "Receita " . $i . ": \n" . "Descrição: " . $r->getDescricaoReceita() ."\n"
                    .  "valor: R$" . $r->getValorReceita() . "\n";
                    $i++;
                }

                break;

            case '4':
                echo "Listar despesas \n";

                $i = 1;
                foreach ($arrayDespesa as $d){
                    echo "Despesa " . $i . ": \n" . "Descrição: " . $d->getDescricaoDespesa() ."\n"
                    .  "valor: R$" . $d->getValorDespesa() . "\n";
                    $i++;
                }

                break;

            case '5':

                $saldo = 0;
                $vDespesa = 0;
                $vReceita  = 0;

                echo "Sumario \n";

                foreach ($arrayReceita as $r)
                    $vReceita += $r->getValorReceita();
                
                foreach ($arrayDespesa as $d)
                    $vDespesa += $d->getValorDespesa();

                $saldo = $vReceita - $vDespesa;
                
                echo "Saldo: R$" . $saldo . "\n" .
                "Total receitas: R$" . $vReceita . "\n" .
                "Total despesas: R$" . $vDespesa;
                
                break;

            case '0':
                echo "Programa encerrado! \n";
                break;
            
            default:
                echo "Opcão Inválida! \n";
                break;
        }
        
    } while ($opcao!=0);
