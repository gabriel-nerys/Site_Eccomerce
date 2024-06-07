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
    <title>Carrinho</title>
</head>
<body>
    <div class="container-fluid" style="height: 53vh;">
    <div class="row text-center" style="margin-top: 15px;"><h2>Carrinho de Compras</h2></div>
    <?php 

        include 'conexao.php';

        $total = null;
        
        if(!isset($_SESSION['carrinho'])){
            $_SESSION['carrinho'] = array();
        }

        foreach ($_SESSION['carrinho'] as $cd => $qtd){
            
            $consulta = $cn->query("select * from tbl_tenis where cd_tenis='$cd'");
            $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

            $tenis = $exibe['nm_tenis'];
            $preco = number_format(($exibe['vl_preco']),2,',','.');
            $total += $exibe['vl_preco'] * $qtd;

            //$cd = $_GET['cd'];

        //$consulta = $cn->query("Select * from vw_tenis where cd_tenis = '$cd'");
        //$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
        
        
    ?>

        <div class="row mb-4 align-items-center">
            <div class="col-sm-2 offset-sm-1">
                <img src="img/<?php echo $exibe['ds_tenis_img']; ?>" class="img-fluid" alt="<?php echo $tenis; ?>">
            </div>

            <div class="col-sm-3">
                <h4 class="mt-3"><?php echo $tenis; ?></h4>
            </div>

            <div class="col-sm-2">
                <h4 class="mt-3">R$ <?php echo $preco; ?></h4>
            </div>

            <div class="col-sm-2">
                <h4 class="mt-3"><?php echo $qtd; ?></h4>
            </div>

            <div class="col-sm-2">
                <a href="removecarrinho.php?cd=<?php echo $cd; ?>" class="btn btn-danger btn-lg btn-block mt-3">Excluir</a>
            </div>
        </div>

    </div>

    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>