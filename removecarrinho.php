<?php 

    session_start();

    $cd = $_GET['cd'];
    
    //destrói a sessão do produto do carrinho pelo id
    unset($_SESSION['carrinho'][$cd]);
    
    header("Location: carrinho.php");

?>