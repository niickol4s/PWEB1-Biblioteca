<?php
    class Usuario extends Pessoa {
        private $idUsuario;
        private $senha;
        public $logado;

        public function __construct($idUsuario, $senha) {
            $this->idUsuario = $idUsuario;
            $this->senha = $senha;
        }

        public function getIdUsuario() {
            return $this->idUsuario;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setIdUsuario($iu) {
            $this->idUsuario = $iu;
        }

        public function setSenha($s) {
            $this->senha = $s;
        }

        public function login($iu, $s): bool {
            if($this->idUsuario === $iu && $this->senha === $s) {
                return true;
            } else {
                return false;
            }
        }

        public function logout($iu, $logado): bool {
            if($this->idUsuario === $iu && $this->logado === $logado) {
                return true;
            } else {
                return false;
            }
        }
        
    }
?>