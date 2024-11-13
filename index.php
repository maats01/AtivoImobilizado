<?php 
require_once 'config.php';
require_once 'Utils/Banco.php';
require_once 'Utils/utils.php';
require_once 'Views/Shared/navbar.php';

date_default_timezone_set('America/Sao_Paulo');

$rota = "Ativo";

if (array_key_exists("rota", $_GET))
{
    $rota = (string) $_GET["rota"];
}

if (is_file("Controllers/{$rota}Controller.php"))
{
    require "Controllers/{$rota}Controller.php";
}
else
{
    require "Controllers/404.php";
}

?>