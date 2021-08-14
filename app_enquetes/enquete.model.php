<?php

    class Enquete {
        private $titulo;
        private $opcoes;
        private $data_ini;
        private $data_fim;

        public function __get($atributo) {
            return $this.$atributo;
        }

        public function __set($atributo, $valor) {
            return $this->$atributo = $valor;
        }
    }

?>