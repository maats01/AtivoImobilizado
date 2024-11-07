<?php 
require "Models/Ativo.php";
require "Repositories/AtivoRepository.php";
require __DIR__ . '/../Services/AtivoService.php';

$ativoService = new AtivoService($pdo);
$ativoRepository = new AtivoRepository($pdo);
$ativo = new Ativo();

$exibir_tabela = true;

// inserir novo ativo
if (tem_post() && !isset($_GET['edit_id']))
{    
    if (array_key_exists('descricao', $_POST))
    {
        $ativo->setDescricao($_POST['descricao']);
    }

    if (array_key_exists('filial', $_POST))
    {
        $ativo->setFilialId(intval($_POST['filial']));
    }

    if (array_key_exists('setor', $_POST))
    {
        $ativo->setSetorId(intval($_POST['setor']));
    }

    if (array_key_exists('categoria', $_POST))
    {
        $ativo->setCategoriaId(intval($_POST['categoria']));
    }

    if (array_key_exists('data_aquisicao', $_POST))
    {
        $ativo->setDataAquisicao(traduz_data_para_banco($_POST['data_aquisicao']));
    }

    if (array_key_exists('condicao', $_POST))
    {
        $condicao = $_POST['condicao'];
        if ($condicao !== '')
        {
            $ativo->setCondicao(intval($condicao));
        }
    }

    if (array_key_exists('vida_util', $_POST))
    {
        $ativo->setVidaUtil(intval($_POST['vida_util']));
    }
    
    if (array_key_exists('valor', $_POST))
    {
        $ativo->setValor(floatval($_POST['valor']));
    }

    
    $ativo->setDataCadastro(date('Y-m-d H:i:s'));
    $ativoRepository->salvar($ativo);
    header('Location: index.php?rota=Filial');
    die();
}

// editar ativo
if (isset($_GET['edit_id']))
{
    $exibir_tabela = false;
    $id = intval($_GET['edit_id']);
    $ativo = $ativoRepository->buscar($id);

    if (tem_post())
    {
        if (array_key_exists('descricao', $_POST))
        {
            $ativo->setDescricao($_POST['descricao']);
        }
    
        if (array_key_exists('filial', $_POST))
        {
            $ativo->setFilialId(intval($_POST['filial']));
        }
    
        if (array_key_exists('setor', $_POST))
        {
            $ativo->setSetorId(intval($_POST['setor']));
        }
    
        if (array_key_exists('categoria', $_POST))
        {
            $ativo->setCategoriaId(intval($_POST['categoria']));
        }
    
        if (array_key_exists('data_aquisicao', $_POST))
        {
            $ativo->setDataAquisicao(traduz_data_para_banco($_POST['data_aquisicao']));
        }
    
        if (array_key_exists('condicao', $_POST))
        {
            $condicao = $_POST['condicao'];
            if ($condicao !== '')
            {
                $ativo->setCondicao(intval($condicao));
            }
        }
    
        if (array_key_exists('vida_util', $_POST))
        {
            $ativo->setVidaUtil(intval($_POST['vida_util']));
        }
        
        if (array_key_exists('valor', $_POST))
        {
            $ativo->setValor(floatval($_POST['valor']));
        }
    
        $ativoRepository->salvar($ativo);
        header('Location: index.php?rota=Filial');
        die();
    }

}

// deletar ativo
if (isset($_GET['delete_id']))
{
    $id = intval($_GET['delete_id']);
    $ativoRepository->remover($id);
    header('Location: index.php?rota=Filial');
    die();
}

$formData = $ativoService->dados_para_form();
$ativos = $ativoRepository->buscar();
require __DIR__ . "/../Views/Ativo/template.php";

?>