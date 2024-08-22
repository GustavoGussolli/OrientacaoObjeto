<?php 

    class Pessoa{

        private $nome;
        private $endereco;
        private $cidade;
        private $uf;
        private $altura;

        public function getApresentacao(){

            return "Olá mundo, sou " . $this->getNome() .
             " resido no endereço " . $this->getEndereco() .
             ", " . $this->getCidade() . "-" . $this->getUf() .
             " e possuo uma altura de " . $this->getAltura() . "!\n";

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
         * Get the value of endereco
         */
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         */
        public function setEndereco($endereco): self
        {
                $this->endereco = $endereco;

                return $this;
        }

        /**
         * Get the value of cidade
         */
        public function getCidade()
        {
                return $this->cidade;
        }

        /**
         * Set the value of cidade
         */
        public function setCidade($cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }

        /**
         * Get the value of uf
         */
        public function getUf()
        {
                return $this->uf;
        }

        /**
         * Set the value of uf
         */
        public function setUf($uf): self
        {
                $this->uf = $uf;

                return $this;
        }

        /**
         * Get the value of altura
         */
        public function getAltura()
        {
                return $this->altura;
        }

        /**
         * Set the value of altura
         */
        public function setAltura($altura): self
        {
                $this->altura = $altura;

                return $this;
        }
    }

    $p1 = new Pessoa();
    $p1->setNome("Gustavo");
    $p1->setEndereco("Três Lagoas");
    $p1->setCidade("Foz do iguaçu");
    $p1->setUf("PR");
    $p1->setAltura("180");

    echo $p1->getApresentacao();

    $p2 = new Pessoa();
    $p2->setNome("João");
    $p2->setEndereco("Três Lagoas");
    $p2->setCidade("Foz do iguaçu");
    $p2->setUf("PR");
    $p2->setAltura("175");

    echo $p2->getApresentacao();