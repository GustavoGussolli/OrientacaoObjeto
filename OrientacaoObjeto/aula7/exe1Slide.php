<?php 

    class Escola{

        private string $nome;
        private string $endereco;
        private int $qtdAlunos;
    

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
         * Get the value of endereco
         */
        public function getEndereco(): string
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         */
        public function setEndereco(string $endereco): self
        {
                $this->endereco = $endereco;

                return $this;
        }

        /**
         * Get the value of qtdAlunos
         */
        public function getQtdAlunos(): int
        {
                return $this->qtdAlunos;
        }

        /**
         * Set the value of qtdAlunos
         */
        public function setQtdAlunos(int $qtdAlunos): self
        {
                $this->qtdAlunos = $qtdAlunos;

                return $this;
        }
    }

    $escolas = array();

    for ($i=1; $i <= 4; $i++){ 

        echo "Escola " . $i . "\n";

        $escola = new Escola();
        $escola->setNome(readline("Informe o nome da escola: "));
        $escola->setEndereco(readline("Informe o endereço da escola: "));
        $escola->setQtdAlunos(readline("Informe a quantidade de alunos: "));

        array_push($escolas, $escola);
        
    }

    foreach ($escolas as $e){

        echo "Nome: " . $e->getNome() . "\n";
        echo "Endereço: " . $e->getEndereco() . "\n";
        echo "Quntidade de Alunos: " . $e->getQtdAlunos() . "\n";
        
    }

    $escolasMaisAlunos = $escolas[0];

    foreach ($escolas as $e){

        if($e->getQtdAlunos() > $escolasMaisAlunos->getQtdAlunos()){

            $escolasMaisAlunos = $e;
           
        }
    }

    echo "Escola com mais alunos: \n";
    echo "Nome: " . $escolasMaisAlunos->getNome() . "\n";
    echo "Endereço: " . $escolasMaisAlunos->getEndereco() . "\n";
    echo "Quntidade de Alunos: " . $escolasMaisAlunos->getQtdAlunos() . "\n";