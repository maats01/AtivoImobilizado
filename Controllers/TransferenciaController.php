<?php 
require_once 'Models/transferencia.php';
require_once 'Repositories/TransferenciaRepository.php';
require_once 'Services/TransferenciaService.php';

$transfService = new TransferenciaService($pdo);
$transfRepository = new TransferenciaRepository($pdo);
$transf = new Transferencia();

$exibir_tabela = true;

// inserindo nova transferencia
if (tem_post() && !isset($_GET['edit_id']))
{
    if (isset($_POST['ativo_id']))
    {
        $transf->setIdAtivo(intval($_POST['ativo_id']));
    }

    if (isset($_POST['filial_origem_id']))
    {
        $transf->setIdFilialOrigem(intval($_POST['filial_origem_id']));
    }

    if (isset($_POST['setor_origem_id']))
    {
        $transf->setIdSetorOrigem(intval($_POST['setor_origem_id']));
    }

    if (isset($_POST['filial_destino_id']))
    {
        $transf->setIdFilialDestino(intval($_POST['filial_destino_id']));
    }

    if (isset($_POST['setor_destino_id']))
    {
        $transf->setIdSetorDestino(intval($_POST['setor_destino_id']));
    }

    if (isset($_POST['data']))
    {
        $transf->setData($_POST['data']);
    }

    $transfRepository->salvar($transf);
    $transfService->atualizar_ativo($transf->getIdAtivo(), $transf->getIdFilialDestino(), $transf->getIdSetorDestino());
    redirecionar('Transferencia');
}

// editando transferencia
if (isset($_GET['edit_id']))
{
    $id = intval($_GET['edit_id']);
    $transf = $transfRepository->buscar($id);
    $exibir_tabela = false;

    if (tem_post())
    {
        if (isset($_POST['ativo_id']))
        {
            $transf->setIdAtivo(intval($_POST['ativo_id']));
        }
    
        if (isset($_POST['filial_origem_id']))
        {
            $transf->setIdFilialOrigem(intval($_POST['filial_origem_id']));
        }
    
        if (isset($_POST['setor_origem_id']))
        {
            $transf->setIdSetorOrigem(intval($_POST['setor_origem_id']));
        }
    
        if (isset($_POST['filial_destino_id']))
        {
            $transf->setIdFilialDestino(intval($_POST['filial_destino_id']));
        }
    
        if (isset($_POST['setor_destino_id']))
        {
            $transf->setIdSetorDestino(intval($_POST['setor_destino_id']));
        }
    
        if (isset($_POST['data']))
        {
            $transf->setData($_POST['data']);
        }

        $transfRepository->atualizar($transf);
        $transfService->atualizar_ativo($transf->getIdAtivo(), $transf->getIdFilialDestino(), $transf->getIdSetorDestino());
        redirecionar('Transferencia');
    }
}

// removendo transferencia
if (isset($_GET['delete_id']))
{
    $id = intval($_GET['delete_id']);
    $transf = $transfRepository->buscar($id);
    $transfService->atualizar_ativo($transf->getIdAtivo(), $transf->getIdFilialOrigem(), $transf->getIdSetorOrigem());
    $transfRepository->remover($id);
    redirecionar('Transferencia');
}

$ativos = $transfService->buscar_ativos() ?? [];
$setores = $transfService->buscar_setores() ?? [];
$filiais = $transfService->buscar_filiais() ?? [];
$transferencias = $transfRepository->buscar() ?? [];
require __DIR__ . '/../Views/Transferencia/template.php';
?>