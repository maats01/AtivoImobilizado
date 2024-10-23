<?php
require_once 'Utils/DateTimeUtil.php';

class Ativo 
{
    private int $id;
    private int $filial_id;
    private int $setor_id;
    private int $categoria_id;
    private string $descricao;
    private $data_cadastro = null;
    private $data_aquisicao = null;
    private int $vida_util;
    private bool $condicao;
    private int $estado_ativo;
    private float $valor;

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setSetorId(int $id) : void
    {
        $this->setor_id = $id;
    }

    public function getSetorId() : int
    {
        return $this->setor_id;
    }

    public function setFilialId(int $id) : void
    {
        $this->filial_id = $id;
    }

    public function getFilialId() : int
    {
        return $this->filial_id;
    }

    public function setCategoriaId(int $id) : void
    {
        $this->categoria_id = $id;
    }

    public function getCategoriaId() : int
    {
        return $this->categoria_id;
    }

    public function setDescricao(string $desc) : void
    {
        $this->descricao = $desc;
    }

    public function getDescricao() : string
    {
        return $this->descricao;
    }

    public function setDataCadastro(DateTime|string $data) : void
    {
        $this->data_cadastro = DateTimeUtil::convertToDateTime($data);
    }

    public function getDataCadastro() : ?DateTime
    {   
        if (is_object($this->data_cadastro))
        {
            return $this->data_cadastro;
        }

        return new DateTime($this->data_cadastro);
    }

    public function setDataAquisicao(DateTime|string $data) : void
    {
        $this->data_aquisicao = DateTimeUtil::convertToDateTime($data);
    }

    public function getDataAquisicao() : ?DateTime
    {
        if (is_object($this->data_aquisicao))
        {
            return $this->data_aquisicao;
        }

        return new DateTime($this->data_aquisicao);
    }

    public function setVidaUtil(int $v) : void
    {
        $this->vida_util = $v;
    }

    public function getVidaUtil() : int
    {
        return $this->vida_util;
    }

    public function setCondicao(bool $stat) : void
    {
        $this->condicao = $stat;
    }

    public function getCondicao() : bool
    {
        return $this->condicao;
    }

    public function setEstadoAtivo(int $estado) : void
    {
        $this->estado_ativo = $estado;
    }

    public function getEstadoAtivo() : int
    {
        return $this->estado_ativo;
    }

    public function setValor(float $valor) : void
    {
        $this->valor = $valor;
    }

    public function getValor() : float
    {
        return $this->valor;
    }
}
?>