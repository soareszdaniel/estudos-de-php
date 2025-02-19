<?php
    class Caneta{
        private $modelo;
        private $ponta;
        private $tampada;
        private $cor;
        
        public function __construct($modelo, $ponta, $cor) {
            $this->modelo = $modelo;
            $this->ponta = $ponta;
            $this->cor = $cor;
            $this->tampada = true; 
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function getPonta() {
            return $this->ponta;
        }

        public function setPonta($ponta) {
            $this->ponta = $ponta;
        }

        public function getCor() {
            return $this->cor;
        }

        public function setCor($cor) {
            $this->cor = $cor;
        }

        public function isTampada() {
            return $this->tampada;
        }

        public function setTampada($tampada) {
            $this->tampada = $tampada;
        }

    }
?>