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
    <title>Ticket</title>
</head>
<body>
    <style>
        body{
            height: 100vh;
        }
    </style>
    <?php 
        include 'conexao.php';
        include 'nav.php';
        include 'cabecalho.html';
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-sm-offset-4 text-center">
                 <h2>Compra efetuada com sucesso! Seu número de registro é: <?php echo $ticket; ?></h2>
            </div>
        </div>
    </div>

    <?php include 'rodape.html'; ?>

</body>
</html>