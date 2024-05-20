<?php
include 'conexao.php';

    $cd=$_GET['id'];
    $pasta  = "img/"; // Diretorio onde estão as imagens

    $consulta = $cn->query("SELECT* FROM tbl_tenis where cd_tenis= '$cd'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    $excluir = $cn->query("DELETE FROM tbl_tenis WHERE cd_tenis= '$cd' ");

    $foto1=$exibe["ds_tenis_img"];

    if($foto1!=""){
        unlink($pasta.$foto1);
    }

    header('location:lista.php');
?>
