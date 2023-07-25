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
    <title>TenisWord</title>
</head>
<body>
    
    <?php 
        include 'nav.php' ;
        include 'cabecalho.html';
        include 'conexao.php' ;

        $cat = $_GET['cat'];

        // Variavel consulta vai receber variavel $cn que receberá o resultado de uma query
        $consulta = $cn->query("select cd_tenis,nm_tenis,vl_preco,ds_tenis_img,qt_estoque from vw_tenis where ds_categoria = '$cat'");
    ?>


    <div class="container-fluid">
        <div class="row">
            <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){?>
            <div class="col-sm-3">
                <img src="img/<?php echo $exibe['ds_tenis_img']; ?>" class="img-responsive" style="width: 100%;" alt="">
                <div><h4><?php echo mb_strimwidth($exibe['nm_tenis'],0,25,'...') ?></h4></div>
                <div><h5>R$ <?php echo number_format($exibe['vl_preco'],2,',','.') ?></h5></div>

                <div class="text-center">
                    <a href="detalhes.php?cd=<?php echo $exibe['cd_tenis'];?>">
                    <button class="btn btn-outline-secondary" style="width: 100%;">
                        <span class="glyphicon glyphicon-info-sinal" > Detalhes</span> 
                    </button>
                    </a>
                </div>

                <div class="text-center" style="margin-top: 5px; margin-bottom: 10px;">
                    <?php if($exibe['qt_estoque'] > 0) { ?>
                        <a href="carrinho.php?cd=<?php echo $exibe['cd_tenis'];?>">
                        <button class="btn btn-block btn-success">
                            <span class="glyphicon glyphicon-info-sinal"> Comprar</span> 
                        </button>
                        </a>

                    <?php } else { ?>

                        <button class="btn btn-block btn-danger" disabled>
                            <span class="glyphicon glyphicon-info-sinal"> Indisponível</span> 
                        </button>

                    <?php } ?>
                </div>
            </div>
            <?php } ?>         
        </div>
    </div>


    <?php include 'rodape.html' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>