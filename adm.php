<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Erro</title>
</head>
<body>

    <style>
        .navbar{
            margin-bottom: 0;
        }
        .container{
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 55vh;
            display: block;
        }
        
    </style>

    <?php 
        session_start();

        if(empty($_SESSION['Status']) || $_SESSION['Status'] != 1){
            header('location: login.php');
        }

        include 'conexao.php';
        include 'nav.php';
        include 'cabecalho.html';

    ?>

    <div class="container mt-4">
            <div class="row align-items-center">
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light" id="formlogin">
                    <h2>Área administrativa</h2>

                    <a href="formproduto.php"  >
                    <button type="button" class="btn btn-primary" style="width: 100%; margin-top: 10px;"> Incluir produto
                    </button></a><br>
                    
                    <a href="lista.php"  >
                    <button type="button" class="btn btn-warning" style="width: 100%; margin-top: 10px;"> Alterar / Excluir Produto
                    </button>
                </a><br>

                    <a href="formusuario.php"  >
                    <button type="button" class="btn btn-success" style="width: 100%; margin-top: 10px;"> Vendas
                    </button></a><br>

                    <a href="formusuario.php"  >
                    <button type="button" class="btn btn-danger" style="width: 100%; margin-top: 10px;"> Sair da àrea administrativa
                    </button></a><br>

                    </form>
                </div>
            </div>
    </div>

    <?php include 'rodape.html' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>