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

        if(empty($_GET['txtbuscar'])){
            echo "<html><script>location.href='index.php'</script></html>";
        }

        $pesquisa = $_GET['txtbuscar'];

        // Variavel consulta vai receber variavel $cn que receberá o resultado de uma query
        $consulta = $cn->query("select * from vw_tenis where nm_tenis like concat ('%','$pesquisa','%') or nm_marca like concat ('%','$pesquisa','%')");
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
        if($consulta->rowCount() == 0){
            echo "<div class='alert alert-danger'>Nenhum resultado encontrado</div>";
        }
    ?>


    <div class="container-fluid" style="height: 53vh;">
    <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-2 col-sm-offset-1" style="margin-left: 5vh;">             

                <img src="img/<?php echo $exibe['ds_tenis_img'] ?>.jpeg" class="img-responsive" style="width: 100%;">
            </div>  
            <div class="col-sm-5" style="padding-top:20px;">
            <b><?php echo $exibe['nm_tenis'] ?></b>
            <?php echo $exibe['ds_resumo_tenis'] ?>
            </div>
            <div class="col-sm-2" style="padding-top:20px;"><b>Preço: <?php echo $exibe['vl_preco'] ?></b></div>
            <div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px;">
            <a href="detalhes.php?cd=<?php echo $exibe['cd_tenis'];?>">
                    <button class="btn btn-outline-secondary" style="width: 100%;">
                        <span class="glyphicon glyphicon-info-sinal" > Detalhes</span> 
                    </button>
                    </a>
            </div>
        </div>
    <?php } ?>
    </div>


    <?php include 'rodape.html' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>