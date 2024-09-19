<?php
     
    class Turma{

        private string $nome;
        private string $curso;

        private string $alunos;

        

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
         * Get the value of curso
         */
        public function getCurso(): string
        {
                return $this->curso;
        }

        /**
         * Set the value of curso
         */
        public function setCurso(string $curso): self
        {
                $this->curso = $curso;

                return $this;
        }

        /**
         * Get the value of alunos
         */
        public function getAlunos(): string
        {
                return $this->alunos;
        }

        /**
         * Set the value of alunos
         */
        public function setAlunos(string $alunos): self
        {
                $this->alunos = $alunos;

                return $this;
        }
    }