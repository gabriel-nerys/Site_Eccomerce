<?php 
    include 'conexao.php';
    include 'upload.class.php';

    // variaveis que vão receber os dados do formulário que esta na pagina formproduto
    $cd_cat = $_POST['sltcat'];
    $nm_tenis = $_POST['txtnometenis'];
    $cd_marca = $_POST['sltmarca'];
    $no_med = $_POST['txttamanho'];
    $preco = $_POST['txtpreco'];
    $qt_estoque = $_POST['txtestoque'];
    $resumo = $_POST['txtdescricao'];
    $lanc = $_POST['sltlanc'];

    $remover1='.'; // criando variavel e atribuindo o valor de ponto para ela
    $preco = str_replace($remover1, '', $preco);
    $remover2=',';
    $preco = str_replace($remover2, '.', $preco);

    $recebe_foto1 = $_FILES['txtfoto'];

    $destino = 'img/';
    // informando para qual diretorio será enviado a imagem 

    //gerando nome aleatório para imagem
    //preg_match vai pegar imagens nas extençoes jpg|jpeg|png|gif
    preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao1);

    // a função md5 vai gerar um valor ramdomico com base no horario "time"
    //incrementar o ponto e a extensão
    // função md5 é criada para gerar criptografia
    $img_nome1 = md5(uniqid(time())).".".$extencao1[1];

    try{ //try para tentar inserir

        $inserir = $cn->query("insert into tbl_tenis(cd_categoria, nm_tenis, cd_marca, no_med, vl_preco, 
        qt_estoque, ds_resumo_tenis, ds_tenis_img, sg_lancamento) values ('$cd_cat', '$nm_tenis',
        '$cd_marca', '$no_med', '$preco', '$qt_estoque', '$resumo', '$img_nome1', '$lanc')");

        move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1); 

        
      

        header('location:index.php');

    }catch(PDOException $e){
        echo "Erro ao inserir ".$e->getMessage();
    }
?>