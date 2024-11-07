<?php 
require __DIR__ . '/../Repositories/SetorRepository.php';
require __DIR__ . '/../Repositories/CategoriaRepository.php';
require __DIR__ . '/../Repositories/FilialRepository.php';
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
        $filiais = $this->filialRepository->buscar();
        $categorias = $this->categoriaRepository->buscar();
        $setores = $this->setorRepository->buscar();

        return [
            'filiais' => $filiais,
            'categorias' => $categorias,
            'setores' => $setores
        ];
    }
}
?>