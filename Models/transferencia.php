<?php 
class Transferencia
{
    private int $id_ativo;
    private int $id_filial_origem;
    private int $id_setor_origem;
    private int $id_filial_destino;
    private int $id_setor_destino;
    private DateTime $data_transferencia;

    public function setIdAtivo(int $id)
    {
        $this->id_ativo = $id;
    }

    public function getIdAtivo() : int
    {
        return $this->id_ativo;
    }

    public function setIdFilialOrigem(int $id)
    {
        $this->id_filial_origem = $id;
    }

    public function getIdFilialOrigem() : int
    {
        return $this->id_filial_origem;
    }

    public function setIdFilialDestino(int $id)
    {
        $this->id_filial_destino = $id;
    }

    public function getIdFilialDestino() : int
    {
        return $this->id_filial_destino;
    }

    public function setIdSetorOrigem(int $id)
    {
        $this->id_setor_origem = $id;
    }

    public function getIdSetorOrigem() : int
    {
        return $this->id_setor_origem;
    }

    public function setIdSetorDestino(int $id)
    {
        $this->id_setor_destino = $id;
    }

    public function getIdSetorDestino() : int
    {
        return $this->id_setor_destino;
    }

    public function setData(DateTime $data)
    {
        $this->data_transferencia = $data;
    }

    public function getData() : DateTime
    {
        return $this->data_transferencia;
    }
}
?>