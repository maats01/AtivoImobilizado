<?php 
require "config.php";
require "Utils/Banco.php";

$path = __DIR__ . '/Models/*.php';
foreach (glob($path) as $file) 
{
    require_once $file;
}
$path = __DIR__ . '/Repository/*.php';
foreach (glob($path) as $file)
{
    require_once $file;
}
?>