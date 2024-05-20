<?php
    include 'conexao.php';
    
    $cd_tenis = $_GET['cd_altera'];

    $consulta = $cn->query("SELECT ds_tenis_img FROM tbl_tenis WHERE cd_tenis='$cd_tenis'");

    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    $cd_categoria = $_POST['sltcat'];
    $nm_tenis = $_POST['txtnome'];
    $cd_marca = $_POST['sltmarc'];
    $no_med = $_POST['txttamanho'];
    $vl_preco = $_POST['txtpreco'];
    $qt_estoque = $_POST['txtestoque'];
    $ds_resumo_tenis = $_POST['txtdescricao'];
    $ds_tenis_img = $_POST['txtfoto'];
    $sg_lancamento = $_POST['sltlanc'];

    $remover1 = '.'; // variavel que vai receber o ponto
    $preco1 = str_replace($remover1, '', $preco1); // substituindo . por vazio
    $remove2 = ','; // variavel que vai receber a virgula
    $preco2 = str_replace($remove2, '.', $preco2); // substituindo , por .

    $recebe_foto1 = $_FILES['txtfoto']; //recebendo conteudo do campo file

    $destino = "img/"; //pasta onde será feito o upload da imagem

    if(!empty($recebe_foto1['name'])){
        
        preg_match("/\.(jpg | jpeg | png| gif) {1}$/i",$recebe_foto1['name'],$extencao1);
        $img_nome1 = md5(uniqid(time())).".".$extencao1[1];

        $upload_foto1=1;
    }else{
        $img_nome1 = $exibe['ds_tenis_img'];
        $upload_foto1=0; // zero pq não fara atualização de fotos
    }

    try{
        //comando update para realizar as trocas
        $alterar = $cn->query("UPDATE tbl_tenis SET
        
        cd_categoria = '$cd_categoria',
        nm_tenis = '$nm_tenis',
        cd_marca = '$cd_marca',
        no_med = '$no_med',
        vl_preco = '$vl_preco',
        qt_estoque = '$qt_estoque',
        ds_resumo_tenis = '$ds_resumo_tenis',
        /*ds_tenis_img = '$ds_tenis_img',*/
        sg_lancamento = '$sg_lancamento'

        WHERE cd_tenis = '$cd_tenis'

        "); //as alterações seram feitas com base nos códigos que recebemos

        //if($upload_foto1==1){

            //move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);
            //$resizeObj = new resize($destino.$img_nome1);
            //$resizeObj -> resizeImage(340, 480, 'crop');
            //$resizeObj -> saveImage($destino.$img_nome1, 100);
        //}

        header('location:adm.php');
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>