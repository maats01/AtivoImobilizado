<?php 
require_once 'Models/categoria.php';
require_once 'Repositories/CategoriaRepository.php';

$categoria = new Categoria();
$categoriaRepository = new CategoriaRepository($pdo);

$exibir_tabela = true;

// inserindo nova categoria
if (tem_post() && !isset($_GET['edit_id']))
{
    if (array_key_exists('descricao', $_POST))
    {
        $categoria->setDescricao($_POST['descricao']);
    }

    $categoriaRepository->salvar($categoria);
    redirecionar('Categoria');
}

// atualizando categoria
if (isset($_GET['edit_id']))
{
    $id = intval($_GET['edit_id']);
    $categoria = $categoriaRepository->buscar($id);
    $exibir_tabela = false;

    if (tem_post())
    {
        if (array_key_exists('descricao', $_POST))
        {
            $categoria->setDescricao($_POST['descricao']);
        }
        
        $categoriaRepository->atualizar($categoria);
        redirecionar('Categoria');
    }
}

// removendo categoria
if (isset($_GET['delete_id']))
{
    $id = intval($_GET['delete_id']);
    $categoriaRepository->remover($id);
    redirecionar('Categoria');
}

$categorias = $categoriaRepository->buscar() ?? [];
require __DIR__ . '/../Views/Categoria/template.php';
?>