<?php

    class EnqueteService {

        private $conexao;
        private $enquete;

        public function __construct($conexao, $enquete) {
            $this->conexao = $conexao->conectar();
            $this->enquete = $enquete;
        }

        public function inserir () {
            
            $query = 'insert into tb_enquete(titulo, data_ini, data_fim)values(:titulo, :data_ini, :data_fim)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':titulo', $_POST['titulo']);
            $stmt->bindValue(':data_ini',  $_POST['data_ini']);
            $stmt->bindValue(':data_fim',  $_POST['data_fim']);
            $stmt->execute();            

        }

        public function remover () {
            
        }
    }

    

    

?>