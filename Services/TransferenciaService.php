<?php 
require_once 'Repositories/AtivoRepository.php';
require_once 'Repositories/FilialRepository.php';
require_once 'Repositories/SetorRepository.php';

class TransferenciaService
{
    private $setorRepository;
    private $ativoRepository;
    private $filialRepository;

    public function __construct($pdo)
    {
        $this->setorRepository = new SetorRepository($pdo);
        $this->ativoRepository = new AtivoRepository($pdo);
        $this->filialRepository = new FilialRepository($pdo);
    }

    public function buscar_filiais()
    {
        return $this->filialRepository->buscar();
    }

    public function buscar_ativos()
    {
        return $this->ativoRepository->buscar();
    }

    public function buscar_setores()
    {
        return $this->setorRepository->buscar();
    }

    public function nome_filial($filial_id)
    {
        return $this->filialRepository->buscar($filial_id)->getNome();
    }

    public function nome_ativo($ativo_id)
    {
        return $this->ativoRepository->buscar($ativo_id)->getDescricao();
    }

    public function nome_setor($setor_id)
    {
        return $this->setorRepository->buscar($setor_id)->getDescricao();
    }
}
?>