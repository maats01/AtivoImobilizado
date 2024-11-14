<?php 
require_once 'Repositories/SetorRepository.php';
require_once 'Repositories/CategoriaRepository.php';
require_once 'Repositories/FilialRepository.php';

class AtivoService
{
    private $filialRepository;
    private $categoriaRepository;
    private $setorRepository;

    public function __construct($pdo)
    {
        $this->filialRepository = new FilialRepository($pdo);
        $this->categoriaRepository = new CategoriaRepository($pdo);
        $this->setorRepository = new SetorRepository($pdo);
    }

    public function dados_para_form()
    {
        $filiais = $this->filialRepository->buscar() ?? [];
        $categorias = $this->categoriaRepository->buscar() ?? [];
        $setores = $this->setorRepository->buscar() ?? [];

        return [
            'filiais' => $filiais,
            'categorias' => $categorias,
            'setores' => $setores
        ];
    }

    public function nome_filial($id)
    {
        return $this->filialRepository->buscar($id)->getNome();
    }

    public function nome_categoria($id)
    {
        return $this->categoriaRepository->buscar($id)->getDescricao();
    }

    public function nome_setor($id)
    {
        return $this->setorRepository->buscar($id)->getDescricao();
    }
}
?>