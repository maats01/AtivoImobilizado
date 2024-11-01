<?php 
require "config.php";
require "Utils/Banco.php";
require "Utils/utils.php";
// $path = __DIR__ . '/Models/*.php';
// foreach (glob($path) as $file) 
// {
//     require_once $file;
// }
// $path = __DIR__ . '/Repository/*.php';
// foreach (glob($path) as $file)
// {
//     require_once $file;
// }

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