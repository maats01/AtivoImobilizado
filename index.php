<?php 
require 'config.php';
require 'Utils/Banco.php';
require 'Utils/utils.php';
require 'Views/Shared/navbar.php';

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