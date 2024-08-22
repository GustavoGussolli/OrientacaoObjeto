<?php 

    class Aluno{

        private $nome;
        private $nota1;
        private $nota2;


        public function getMedia(){

            
            return "A média do aluno " . $this->getNome() . " é: " . $this->calcularMedia() . "\n";

        }

        private function calcularMedia(){

            return $media = ($this->getNota1() + $this->getNota2()) /2;

        }

        


        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of nota1
         */
        public function getNota1()
        {
                return $this->nota1;
        }

        /**
         * Set the value of nota1
         */
        public function setNota1($nota1): self
        {
                $this->nota1 = $nota1;

                return $this;
        }

        /**
         * Get the value of nota2
         */
        public function getNota2()
        {
                return $this->nota2;
        }

        /**
         * Set the value of nota2
         */
        public function setNota2($nota2): self
        {
                $this->nota2 = $nota2;

                return $this;
        }

    }

    $aluno1= new Aluno();
    $aluno1->setNome(readline("Informe o Nome: "));
    $aluno1->setNota1(readline("Informe a nota 1: "));
    $aluno1->setNota2(readline("Informe a nota 2: "));

    echo $aluno1->getMedia();

    $aluno2= new Aluno();
    $aluno2->setNome(readline("Informe o Nome: "));
    $aluno2->setNota1(readline("Informe a nota 1: "));
    $aluno2->setNota2(readline("Informe a nota 2: "));

    echo $aluno2->getMedia();

    $aluno3= new Aluno();
    $aluno3->setNome(readline("Informe o Nome: "));
    $aluno3->setNota1(readline("Informe a nota 1: "));
    $aluno3->setNota2(readline("Informe a nota 2: "));

    echo $aluno3->getMedia();