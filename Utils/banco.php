<?php 
    $mysqli = mysqli_connect(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_SCHEMA);

    if ($mysqli->connect_errno) {
        echo "Problemas para conectar no banco. Verifique o banco.";
        echo mysqli_connect_error();
        die();
    }
?>  