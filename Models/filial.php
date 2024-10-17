<?php
class Filial
{
    private int $id;
    private string $cnpj;
    private string $nome_filial;
    private string $estado;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private int $numero;

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setCnpj(string $cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setNome(string $nome)
    {
        $this->nome_filial = $nome;
    }

    public function getNome(): string
    {
        return $this->nome_filial;
    }

    public function setEstado(string $estado)
    {
        $this->estado = $estado;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function setCidade(string $cidade)
    {
        $this->cidade = $cidade;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function setBairro(string $bairro)
    {
        $this->bairro = $bairro;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function setRua(string $rua)
    {
        $this->rua = $rua;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function setNumero(int $numero)
    {
        $this->numero = $numero;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }
}
