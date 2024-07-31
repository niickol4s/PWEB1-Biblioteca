<?php
    class Funcionario extends Pessoa {
        private $idFuncionario;
        private $cargo;

        public function __construct($idFuncionario, $cargo) {
            $this->idFuncionario = $idFuncionario;
            $this->cargo = $cargo;
        }

        public function getIdFuncionario() {
            return $this->idFuncionario;
        }

        public function getCargo() {
            return $this->cargo;
        }

        public function setIdFuncionario($if) {
            $this->idFuncionario = $if;
        }

        public function setCargo($c) {
            $this->cargo = $c;
        }

        public function cadastrarLivro(livro): bool {
            
        }

    }
?>