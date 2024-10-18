<?php 
class SetorRepository
{
    private $bd;

    public function __construct(mysqli $bd)
    {
        $this->bd = $bd;
    }

    public function salvar(Setor $setor)
    {
        $descricao = $setor->getDescricao();

        $query = "INSERT INTO SETOR (DESCRICAO_SETOR) VALUES ('$descricao')";

        $this->bd->query($query);
    }

    public function atualizar(Setor $setor)
    {
        $id = $setor->getId();
        $descricao = $setor->getDescricao();

        $query = "
            UPDATE SETOR SET
                DESCRICAO_SETOR = '$descricao'
            WHERE ID = $id
        ";

        $this->bd->query($query);
    }

    public function remover(int $id)
    {
        $query = "DELETE FROM SETOR WHERE ID = $id";
        
        $this->bd->query($query);
    }

    public function buscarSetor(int $id)
    {
        $query = "SELECT * FROM SETOR WHERE ID = $id";
        $resultado = $this->bd->query($query);

        return $resultado->fetch_object();
    }
}
?>