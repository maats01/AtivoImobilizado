<?php 
require "Models/Filial.php";
require "Repositories/FilialRepository.php";

$filialRepository = new FilialRepository($pdo);
$filial = new Filial();

// inserir nova filial
if (tem_post() & !isset($_GET['edit_id']))
{
    if (array_key_exists('nome', $_POST))
    {
        $filial->setNome($_POST['nome']);
    }

    if (array_key_exists('cnpj', $_POST))
    {
        $filial->setCnpj($_POST['cnpj']);
    }

    if (array_key_exists('estado', $_POST))
    {
        $filial->setEstado($_POST['estado']);
    }

    if (array_key_exists('cidade', $_POST))
    {
        $filial->setCidade($_POST['cidade']);
    }

    if (array_key_exists('bairro', $_POST))
    {
        $filial->setBairro($_POST['bairro']);
    }

    if (array_key_exists('rua', $_POST))
    {
        $filial->setRua($_POST['rua']);
    }
    
    if (array_key_exists('num', $_POST))
    {
        $filial->setNumero($_POST['num']);
    }

    $filialRepository->salvar($filial);
    header('Location: index.php?rota=Filial');
    die();
}

// atualizando filial
if (isset($_GET['edit_id']))
{
    $id = intval($_GET['edit_id']);
    $filial = $filialRepository->buscar($id);
    if (tem_post())
    {
        if (array_key_exists('nome', $_POST))
        {
            $filial->setNome($_POST['nome']);
        }
    
        if (array_key_exists('cnpj', $_POST))
        {
            $filial->setCnpj($_POST['cnpj']);
        }
    
        if (array_key_exists('estado', $_POST))
        {
            $filial->setEstado($_POST['estado']);
        }
    
        if (array_key_exists('cidade', $_POST))
        {
            $filial->setCidade($_POST['cidade']);
        }
    
        if (array_key_exists('bairro', $_POST))
        {
            $filial->setBairro($_POST['bairro']);
        }
    
        if (array_key_exists('rua', $_POST))
        {
            $filial->setRua($_POST['rua']);
        }
        
        if (array_key_exists('num', $_POST))
        {
            $filial->setNumero($_POST['num']);
        }
        
        $filialRepository->atualizar($filial);
        header('Location: index.php?rota=Filial');
        die();
    }
}
// removendo filial
if (array_key_exists('delete_id', $_GET))
{
    $id = intval($_GET['delete_id']);
    $filialRepository->remover($id);
    header('Location: index.php?rota=Filial');
    die();
}

$exibir_tabela = true;

$filiais = $filialRepository->buscar();
require __DIR__ . "/../Views/Filial/template.php";
?>