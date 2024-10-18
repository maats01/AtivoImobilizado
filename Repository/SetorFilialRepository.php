<?php 
class SetorFilialRepository
{
    private $bd;

    public function __construct(mysqli $bd)
    {
        $this->bd = $bd;
    }

    public function salvar(SetorFilial $sf)
    {
        $setor_id = $sf->getSetorId();
        $filial_id = $sf->getFilialId();

        $query = "
            INSERT INTO SETOR_FILIAL (SETOR_ID, FILIAL_ID)
            VALUES ($setor_id, $filial_id)
        ";

        $this->bd->query($query);
    }

    public function atualizar(SetorFilial $sf)
    {
        $id = $sf->getId();
        $setor_id = $sf->getSetorId();
        $filial_id = $sf->getFilialId();

        $query = "
            UPDATE SETOR_FILIAL SET
                SETOR_ID = $setor_id,
                FILIAL_ID = $filial_id
            WHERE ID = $id
        ";

        $this->bd->query($query);
    }

    public function remover(int $id)
    {
        $query = "DELETE FROM SETOR_FILIAL WHERE ID = $id";

        $this->bd->query($query);
    }

    public function buscar()
    {
        // TO DO
    }
}
?>