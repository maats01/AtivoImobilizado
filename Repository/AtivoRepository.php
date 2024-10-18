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
        $status = $ativo->getStatus();
        $estado = $ativo->getEstadoAtivo();
        $valor = $ativo->getValor();

        if ($data_cadastro != NULL)
        {
            $data_cadastro = "'{$data_cadastro->format('Y-m-d')}'";
        }

        if ($data_aquisicao != NULL)
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
                $status,
                $estado,
                $valor
            )
        ";

        $this->bd->query($sqlGravar);
    }
}
?>