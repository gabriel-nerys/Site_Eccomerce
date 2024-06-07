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
    <?php 
        session_start();


        if(empty($_SESSION['Status']) || $_SESSION['Status'] != 1){
            header('location: login.php');
        }

        include 'conexao.php';
        include 'nav.php';
        include 'cabecalho.html';

        
        //verificando se o codigo do produto não esta vazio
        if(!empty($_GET['cd'])){
            //inserindo código do produto
            $cd = $_GET['cd'];

            //se a sessão carrinho não estiver preenchida
            if(!isset($_SESSION['carrinho'])){
                //será criado uma sessão chamada carrinho para receber um vetor
                $_SESSION['carrinho'] = array();
            }

            //se o código do produto não estiver na sessão carrinho
            if(!isset($_SESSION['carrinho'][$cd])){
                //será criado um vetor com o código do produto e a quantidade
                $_SESSION['carrinho'][$cd] = 1;
            }else{
                //se o código do produto já estiver na sessão carrinho
                $_SESSION['carrinho'][$cd]+=1;
            }

            
            include 'mostracarrinho.php';
        }else{
            include 'mostracarrinho.php';
        }
        
    ?>

    <div class="container-fluid" style="height: 53vh;">
        <div class="row text-center" style="margin-top: 15px;">
            <h2>Total: R$ <?php echo $total;?></h2>

        </div>
        <div class="row text-center" style="margin-top: 15px;">
            <a href="index.php"><button class="btn btn-lg btn-primary" style="width: 50%;">Continuar comprando</button></a>
            <?php if(count($_SESSION['carrinho']) > 0){ ?>

            <a href="finalizarcompra.php"><button class="btn btn-lg btn-success" style="width: 50%; margin-top: 15px;">Finalizar</button></a>
            <?php } ?>
        </div>
    </div>

    

    <?php include 'rodape.html' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>