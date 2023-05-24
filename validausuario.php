<?php 
    include 'conexao.php' ;

    session_start(); // iniciando sessão

    $Vemail = $_POST['txtemail'];
    $Vsenha = $_POST['txtsenha'];

    $consulta = $cn->query("select cd_usuario,ds_email,ds_senha,ds_status,nm_usuario 
    from tbl_usuario where ds_email='$Vemail' and ds_senha='$Vsenha'");

    if ($consulta->rowCount() == 1) { //rowCount verifica se usuario existe ou não
        $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
        $SESSION['ID'] = $exibeUsuario['cd_usuario'];
        header('location:index.php');
    }else{
        header('location:erro.php');
    }
?>