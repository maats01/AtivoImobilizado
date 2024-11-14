<?php 
require_once 'Repositories/SetorFilialRepository.php';

class SetorService
{
    private $setorFilialRepository;

    public function __construct($pdo)
    {
        $this->setorFilialRepository = new SetorFilialRepository($pdo);
    }

    public function remover_por_setor($setor_id)
    {
        return $this->setorFilialRepository->removerPorSetor($setor_id);
    }
}
?>