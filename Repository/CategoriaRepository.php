<?php 
class CategoriaRepository
{
    private $bd;

    public function __construct(mysqli $bd)
    {
        $this->bd = $bd;
    }

    public function salvar(Categoria $categoria)
    {
        $descricao = $categoria->getDescricao();

        $query = "INSERT INTO CATEGORIA (DESCRICAO) VALUES ('$descricao')";

        $this->bd->query($query);
    }

    public function atualizar(Categoria $categoria)
    {
        $id = $categoria->getId();
        $descricao = $categoria->getDescricao();

        $query = "
            UPDATE CATEGORIA SET
                DESCRICAO = '$descricao'
            WHERE ID = $id;
        ";

        $this->bd->query($query);
    }

    public function remover(int $id)
    {
        $query = "DELETE FROM CATEGORIA WHERE ID = $id";

        $this->bd->query($query);
    }

    public function buscarCategoria(int $id) : Categoria
    {
        $query = "SELECT * FROM CATEGORIA WHERE ID = $id";
        $resultado = $this->bd->query($query);

        return $resultado->fetch_object('Categoria');
    }
}
?>