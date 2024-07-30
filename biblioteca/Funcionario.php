<?php
    class Funcionario extends Pessoa {
        private $idFuncionario;
        private $cargo;

        public function __construct($idFuncionario, $cargo) {
            $this->idFuncionario = $idFuncionario;
            $this->cargo = $cargo;
        }

        public function cadastrarLivro(livro): bool {
            
        }

    }
?>