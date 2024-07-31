<?php
    class Pessoa {
        private $nome;
        private $cpf;

        public function __construct($nome, $cpf) {
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function setNome($n) {
            $this->nome = $n;
        }

        public function setCpf($c) {
            $this->cpf = c;
        }
    } 
?>