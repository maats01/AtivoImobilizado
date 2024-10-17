<?php
class Ativo 
{
    private int $id;
    private int $setor_id;
    private int $filial_id;
    private int $categoria_id;
    private string $descricao;
    private DateTime $data_aquisicao;
    private DateTime $data_cadastro;
    private int $vida_util;
    private bool $status;
    private int $estado_ativo;
    private float $valor;

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setSetorId(int $id)
    {
        $this->setor_id = $id;
    }

    public function getSetorId() : int
    {
        return $this->setor_id;
    }

    public function setFilialId(int $id)
    {
        $this->filial_id = $id;
    }

    public function getFilialId() : int
    {
        return $this->filial_id;
    }

    public function setCategoriaId(int $id)
    {
        $this->categoria_id = $id;
    }

    public function getCategoriaId() : int
    {
        return $this->categoria_id;
    }

    public function setDescricao(string $desc)
    {
        $this->descricao = $desc;
    }

    public function getDescricao() : string
    {
        return $this->descricao;
    }

    public function setDataCadastro(DateTime $data)
    {
        $this->data_cadastro = $data;
    }

    public function getDataCadastro() : DateTime
    {
        return $this->data_cadastro;
    }

    public function setDataAquisicao(DateTime $data)
    {
        $this->data_aquisicao = $data;
    }

    public function getDataAquisicao() : DateTime
    {
        return $this->data_aquisicao;
    }

    public function setVidaUtil(int $v)
    {
        $this->vida_util = $v;
    }

    public function getVidaUtil() : int
    {
        return $this->vida_util;
    }

    public function setStatus(bool $stat)
    {
        $this->status = $stat;
    }

    public function getStatus() : bool
    {
        return $this->status;
    }

    public function setEstadoAtivo(int $estado)
    {
        $this->estado_ativo = $estado;
    }

    public function getEstadoAtivo() : int
    {
        return $this->estado_ativo;
    }

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }

    public function getValor() : float
    {
        return $this->valor;
    }
}
?>