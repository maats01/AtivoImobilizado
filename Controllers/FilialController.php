<?php 
require_once 'Models/Filial.php';
require_once 'Repositories/FilialRepository.php';
require_once 'Services/FilialService.php';

$filialService = new FilialService($pdo);
$filialRepository = new FilialRepository($pdo);
$filial = new Filial();

$exibir_tabela = true;

// inserindo nova filial
if (tem_post() && !isset($_GET['edit_id']) && !isset($_GET['detail_id']))
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
    redirecionar('Filial');
}

// atualizando filial
if (isset($_GET['edit_id']))
{
    $exibir_tabela = false;
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
        redirecionar('Filial');
    }
}

// removendo filial
if (array_key_exists('delete_id', $_GET))
{
    $id = intval($_GET['delete_id']);
    $filialRepository->remover($id);
    redirecionar('Filial');
}

// detalhes da filial
if (isset($_GET['detail_id']))
{
    $id = intval($_GET['detail_id']);
    $filial = $filialRepository->buscar($id);
    $setores = $filialService->buscar_setores();
    $setores_atuais = $filialService->buscar_setores_por_filial($id);
    require __DIR__ . "/../Views/Filial/filial_template.php";

    if (tem_post())
    {
        $setores_selecionados = isset($_POST['setores']) ? $_POST['setores'] : [];
        $filialService->atualizar_setores_filial($id, $setores_selecionados, $setores_atuais);

        redirecionar("Filial&detail_id={$id}");
    }

    die();
}

$filiais = $filialRepository->buscar();
require __DIR__ . "/../Views/Filial/template.php";
?>