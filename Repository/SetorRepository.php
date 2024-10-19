<?php 
class SetorRepository
{
    private $bd;

    public function __construct(PDO $bd)
    {
        $this->bd = $bd;
    }

    public function salvar(Setor $setor) : void
    {
        $descricao = $setor->getDescricao();

        $query = "INSERT INTO SETOR (DESCRICAO_SETOR) VALUES ('$descricao')";

        $this->bd->query($query);
    }

    public function atualizar(Setor $setor) : void
    {
        $id = $setor->getId();
        $descricao = $setor->getDescricao();

        $query = "
            UPDATE SETOR SET
                DESCRICAO_SETOR = :descricao
            WHERE ID = :id
        ";

        $stmt = $this->bd->prepare($query);
        $stmt->execute([':descricao' => $descricao, ':id' => $id]);
    }

    public function remover(int $id) : bool
    {
        $query = "DELETE FROM SETOR WHERE ID = :id";
        
        $stmt = $this->bd->prepare($query);

        return $stmt->execute([':id' => $id]);
    }

    public function buscar(int $id = 0) : Setor|array|null
    {
        if ($id > 0)
        {
            return $this->buscarSetor($id);
        }
        else
        {
            return $this->buscarSetores();
        }
    }

    private function buscarSetor(int $id) : ?Setor
    {
        $query = "SELECT * FROM SETOR WHERE ID = :id";
        $stmt = $this->bd->prepare($query);

        $stmt->execute([':id' => $id]);

        $setor = $stmt->fetchObject('Setor');

        if ($setor === false)
        {
            return null;
        }

        return $setor;
    }

    private function buscarSetores() : array
    {
        $query = "SELECT * FROM SETOR";
        $stmt = $this->bd->query($query);

        $setores = [];

        while ($setor = $stmt->fetchObject('Setor'))
        {
            $setores[] = $setor;
        }

        return count($setores) > 0 ? $setores : null;
    }
}
?>