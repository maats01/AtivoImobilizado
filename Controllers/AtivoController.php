<?php 
require "Models/Ativo.php";
require "Repositories/AtivoRepository.php";
require __DIR__ . '/../Services/AtivoService.php';

$ativoService = new AtivoService($pdo);
$ativoRepository = new AtivoRepository($pdo);
// $ativo = new Ativo();

$exibir_tabela = true;



$formData = $ativoService->dados_para_form();
$ativos = $ativoRepository->buscar();
require __DIR__ . "/../Views/Ativo/template.php";

?>