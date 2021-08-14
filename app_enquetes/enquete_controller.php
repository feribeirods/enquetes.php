<?php

require "../../app_enquetes/enquete.model.php";
require "../../app_enquetes/enquete.service.php";
require "../../app_enquetes/conexao.php";

$enquete = new Enquete();

$enquete->__set('titulo', $_POST['titulo']);
$enquete->__set('data_ini', $_POST['data_ini']);
$enquete->__set('data_fim', $_POST['data_fim']);



$conexao = new Conexao();

$enqueteService = new EnqueteService($conexao, $enquete);
$enqueteService->inserir();


header('Location: criar-enquete.php?inclusao=1');

if ($acao == 'recuperar') {
    echo 'Chegamos até aqui!';
}

?>