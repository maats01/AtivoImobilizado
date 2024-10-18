<?php 
class AtivoRepository
{
    private $bd;

    public function __construct(mysqli $bd)
    {
        $this->bd = $bd;
    }

    public function salvar(Ativo $ativo)
    {
        $setor_id = $ativo->getSetorId();
        $filial_id = $ativo->getFilialId();
        $categoria_id = $ativo->getCategoriaId();
        $descricao = $ativo->getDescricao();
        $data_cadastro = $ativo->getDataCadastro();
        $data_aquisicao = $ativo->getDataAquisicao();
        $vida_util = $ativo->getVidaUtil();
        $condicao = $ativo->getCondicao();
        $estado = $ativo->getEstadoAtivo();
        $valor = $ativo->getValor();

        if (is_object($data_cadastro))
        {
            $data_cadastro = "'{$data_cadastro->format('Y-m-d')}'";
        }

        if (is_object($data_aquisicao))
        {
            $data_aquisicao = "'{$data_aquisicao->format('Y-m-d')}'";
        }

        $sqlGravar = "INSERT INTO ATIVO 
            (FILIAL_ID, SETOR_ID, CATEGORIA_ID, DESCRICAO, DATA_CADASTRO, DATA_AQUISICAO, VIDA_UTIL, CONDICAO, ESTADO_ATIVO, VALOR)
            VALUES 
            (
                $filial_id,
                $setor_id,
                $categoria_id,
                '$descricao',
                $data_cadastro,
                $data_aquisicao,
                $vida_util,
                $condicao,
                $estado,
                $valor
            )
        ";

        $this->bd->query($sqlGravar);
    }

    public function atualizar(Ativo $ativo)
    {
        $id = $ativo->getId();
        $setor_id = $ativo->getSetorId();
        $filial_id = $ativo->getFilialId();
        $categoria_id = $ativo->getCategoriaId();
        $descricao = $ativo->getDescricao();
        $data_cadastro = $ativo->getDataCadastro();
        $data_aquisicao = $ativo->getDataAquisicao();
        $vida_util = $ativo->getVidaUtil();
        $condicao = $ativo->getCondicao();
        $estado = $ativo->getEstadoAtivo();
        $valor = $ativo->getValor();

        if (is_object($data_cadastro))
        {
            $data_cadastro = "'{$data_cadastro->format('Y-m-d')}'";
        }

        if (is_object($data_aquisicao))
        {
            $data_aquisicao = "'{$data_aquisicao->format('Y-m-d')}'";
        }

        $sqlEditar = "
            UPDATE ATIVO SET
                FILIAL_ID = $filial_id,
                SETOR_ID = $setor_id,
                CATEGORIA_ID = $categoria_id,
                DESCRICAO = '$descricao',
                DATA_CADASTRO = $data_cadastro,
                DATA_AQUISICAO = $data_aquisicao,
                VIDA_UTIL = $vida_util,
                CONDICAO = $condicao,
                ESTADO_ATIVO = $estado,
                VALOR = $valor
            WHERE ID = $id
        ";

        $this->bd->query($sqlEditar);
    }

    public function remover(int $id)
    {
        $sqlRemover = "DELETE FROM ATIVO WHERE ID = $id";

        $this->bd->query($sqlRemover);
    }

    public function buscarTarefa(int $id) : Ativo
    {
        $sqlBusca = "SELECT * FROM ATIVO WHERE ID = $id";
        $resultado = $this->bd->query($sqlBusca);

        $tarefa = $resultado->fetch_object('Ativo');

        return $tarefa;
    }
}
?>