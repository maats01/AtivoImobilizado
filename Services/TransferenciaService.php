<?php 
require_once 'Repositories/AtivoRepository.php';
require_once 'Repositories/FilialRepository.php';
require_once 'Repositories/SetorRepository.php';
require_once 'Repositories/SetorFilialRepository.php';

class TransferenciaService
{
    private $setorRepository;
    private $ativoRepository;
    private $filialRepository;
    private $setorFilialRepository;

    public function __construct(PDO $pdo)
    {
        $this->setorRepository = new SetorRepository($pdo);
        $this->ativoRepository = new AtivoRepository($pdo);
        $this->filialRepository = new FilialRepository($pdo);
        $this->setorFilialRepository = new SetorFilialRepository($pdo);
    }

    public function buscar_setores_por_filiais($filiais)
    {
        $setores_filial = [];

        foreach ($filiais as $filial)
        {
            $setores_ids = $this->setorFilialRepository->setoresPorFilial($filial->getId()) ?? [];

            $setores_completos = [];

            foreach ($setores_ids as $setor_id)
            {
                $setor = $this->setorRepository->buscar($setor_id);
                $setores_completos[] = [
                    'id' => $setor->getId(),
                    'descricao' => $setor->getDescricao()
                ];
            }

            $setores_filial[$filial->getId()] = $setores_completos;
        }

        return $setores_filial;
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

    public function atualizar_ativo(int $ativo_id, int $filial_id, int $setor_id)
    {
        $ativo = $this->ativoRepository->buscar($ativo_id);
        $ativo->setFilialId($filial_id);
        $ativo->setSetorId($setor_id);

        $this->ativoRepository->atualizar($ativo);
    }

    public function nome_filial(int $filial_id)
    {
        return $this->filialRepository->buscar($filial_id)->getNome();
    }

    public function nome_ativo(int $ativo_id)
    {
        return $this->ativoRepository->buscar($ativo_id)->getDescricao();
    }

    public function nome_setor(int $setor_id)
    {
        return $this->setorRepository->buscar($setor_id)->getDescricao();
    }
}
?>