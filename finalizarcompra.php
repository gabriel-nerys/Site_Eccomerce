<?php
    //Iniciando sessão para pegar o código do usuario logado para salvar na tabela de vendas
    session_start();

    include 'conexao.php';

    $data = date('Y-m-d'); //Variavel que vai receber a data (ano-mes-dia padrão mysql)
    $ticket = uniqid(); //gerando um ticket com função de gerar um id unico
    $cd_user = $_SESSION['ID']; //Recebendo o código do usuario logado

    //Criando um looping para sessão carrinho que recebe o $cd e a quantidade
    foreach($_SESSION['carrinho'] as $cd => $qtd){
        $consulta = $cn->query("select vl_preco from tbl_tenis where cd_tenis='$cd'");
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
        $preco = $exibe['vl_preco'];

            $inserir = $cn->query("insert into tbl_vendas(nr_ticket,cd_cliente,cd_tenis,qt_tenis,vl_item,dt_venda)
            values('$ticket','$cd_user','$cd','$qtd','$preco','$data')");
    }

    include 'fim.php';
?>