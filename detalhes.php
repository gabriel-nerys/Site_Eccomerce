<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Detalhes</title>
</head>
<body>
    <?php 
        session_start();

        include 'conexao.php';
        include 'nav.php';
        include 'cabecalho.html';

        if(!empty($_GET['cd'])){

        

        $cd_tenis = $_GET['cd'];

        $consulta = $cn->query("Select * from vw_tenis where cd_tenis = '$cd_tenis'");
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
        }else{
            header('Location: index.php');
        }
    ?>

    <div class="container-fluid" style="height: 53vh;">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1" style="margin-left: 5vh;">
                <h2>Detalhes do Produto</h2>

                <img src="img/<?php echo $exibe['ds_tenis_img'] ?>" class="img-responsive" style="width: 100%;">
            </div>

            <div class="col-sm-7">
                <h2><?php echo $exibe['nm_tenis'] ?></h2>

                <p><?php echo $exibe['ds_resumo_tenis'] ?></p>

                <p><b>Tamanho:</b> <?php echo $exibe['no_med'] ?></p>

                <p><b>Estoque:</b> <?php echo $exibe['qt_estoque'] ?></p>

                <p><?php echo $exibe['nm_marca'] ?></p>

                <p><b>R$ <?php echo number_format($exibe['vl_preco'],2,',','.') ?></b></p>

                <button class="btn btn-lg btn-success">Comprar</button>
            </div>
        </div>
    </div>

    <?php include 'rodape.html' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>