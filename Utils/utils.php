<?php 
function convertToDateTime(DateTime|string $data): DateTime
{
    return is_string($data) ? new DateTime($data) : $data;
}

function tem_post()
{
    if (count($_POST) > 0) {
        return true;
    }

    return false;
}

function traduz_data_para_exibir($data)
{
    if (is_object($data) && get_class($data) == "DateTime") {
        return $data->format("d/m/Y");
    }

    if ($data == "" OR $data == "0000-00-00") {
        return "";
    }

    $dados = explode("-", $data);

    if (count($dados) != 3) {
        return $data;
    }

    $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

    return $data_exibir;
}
?>