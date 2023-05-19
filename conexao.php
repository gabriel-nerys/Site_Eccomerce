<?php
    $servidor = "Localhost";
    $usuario = "programador";
    $senha = "123456";
    $banco = "db_site_eccomerce";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>