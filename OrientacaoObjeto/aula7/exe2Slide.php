<?php 

    class Pessoa{

        private string $nome;
        private string $sobrenome;
        private int $idade;

        public function __toString(){

            return sprintf("%s %s, %d anos \n",
            $this->nome, $this->sobrenome, $this->idade);
            
        }


        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of sobrenome
         */
        public function getSobrenome(): string
        {
                return $this->sobrenome;
        }

        /**
         * Set the value of sobrenome
         */
        public function setSobrenome(string $sobrenome): self
        {
                $this->sobrenome = $sobrenome;

                return $this;
        }

        /**
         * Get the value of idade
         */
        public function getIdade(): int
        {
                return $this->idade;
        }

        /**
         * Set the value of idade
         */
        public function setIdade(int $idade): self
        {
                $this->idade = $idade;

                return $this;
        }
    }

    $pessoas = array();

    $opcao = 0;
        do {
            echo "\n-----------MENU-----------\n";
            echo "1- Cadastrar\n";
            echo "2- Listar\n";
            echo "3- Remover\n";
            echo "0- SAIR\n";
            
    $opcao = readline("Escolha a opção: ");

        switch($opcao){

            case 0:

                echo "Programa encerrado!\n";
                break;

            case 1:

                echo "\n";

                $pessoa = new Pessoa();
                $pessoa->setNome(readline("Informe o nome: "));
                $pessoa->setSobrenome(readline("Informe o sobrenome: "));
                $pessoa->setIdade(readline("Informe a idade: "));

                array_push($pessoas, $pessoa);

                break;

            case 2:

                echo "\n Pessoas cadastradas: \n";

                if(count($pessoas) == 0){

                    echo "Não há pessoas cadastradas \n";

                } else{

                    foreach($pessoas as $p)
                    echo $p;

                }
                
                    break;

                case 3:

                    $remover = readline("Informe quem remover: ");

                    array_splice($pessoas, $remover,1);
                    break;
                

            default:
                echo "Opção INVÁLIDA!\n";

            }
                
    }while($opcao != 0);
