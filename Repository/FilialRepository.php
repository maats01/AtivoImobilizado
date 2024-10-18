<?php 
class FilialRepository
{
    private $bd;

    public function __construct(mysqli $bd)
    {
        $this->bd = $bd;
    }

    public function salvar(Filial $filial)
    {
        $cnpj = $filial->getCnpj();
        $nome = $filial->getNome();
        $estado = $filial->getEstado();
        $cidade = $filial->getCidade();
        $bairro = $filial->getBairro();
        $rua = $filial->getRua();
        $numero = $filial->getNumero();

        $query = "
            INSERT INTO FILIAL (NOME_FILIAL, CNPJ, ESTADO, CIDADE, BAIRRO, RUA, NUMERO)
            VALUES
            (
                '$nome',
                '$cnpj',
                '$estado',
                '$cidade',
                '$bairro',
                '$rua',
                $numero
            )
        ";

        $this->bd->query($query);
    }

    public function atualizar(Filial $filial)
    {
        $id = $filial->getId();
        $cnpj = $filial->getCnpj();
        $nome = $filial->getNome();
        $estado = $filial->getEstado();
        $cidade = $filial->getCidade();
        $bairro = $filial->getBairro();
        $rua = $filial->getRua();
        $numero = $filial->getNumero();

        $query = "
            UPDATE FILIAL SET
                NOME_FILIAL = '$nome',
                CNPJ = '$cnpj',
                ESTADO = '$estado',
                CIDADE = '$cidade',
                BAIRRO = '$bairro',
                RUA = '$rua',
                NUMERO = $numero
            WHERE ID = $id
        ";

        $this->bd->query($query);
    }

    public function remover(int $id)
    {
        $query = "DELETE FROM FILIAL WHERE ID = $id";

        $this->bd->query($query);
    }

    public function buscarFilial(int $id) : Filial
    {
        $query = "SELECT * FROM FILIAL WHERE ID = $id";
        $resultado = $this->bd->query($query);

        return $resultado->fetch_object('Filial');
    }
}
?>