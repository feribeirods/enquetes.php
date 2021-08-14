<?php

    class Conexao {

        private $dsn = 'mysql:host=localhost; dbname=teste_enquetes';
        private $usuario = 'root';
        private $senha = '';

        public function conectar() {

            $conexao = new PDO(
                "$this->dsn",
                "$this->usuario",
                "$this->senha"
            );

            return $conexao;

        }

    }

?>