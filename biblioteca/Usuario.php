<?php
    class Usuario extends Pessoa {
        private $idUsuario;
        private $senha;
        public $logado;

        public function __construct($idUsuario, $senha) {
            $this->idUsuario = $idUsuario;
            $this->senha = $senha;
        }

        public function login($idUsuario, $senha): bool {
            if($this->idUsuario === $idUsuario && $this->senha === $senha) {
                return true;
            } else {
                return false;
            }
        }

        public function logout($idUsuario, $logado): bool {
            if($this->idUsuario === $idUsurio && $this->logado === $logado) {
                return true;
            } else {
                return false;
            }
        }
        
    }
?>