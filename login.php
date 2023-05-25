<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Login</title>
</head>
<body>

<?php 
        include 'nav.php' ;
        
        include 'conexao.php' ;
?>

<style>
    body{
        height: 100vh;
    }
    .container{
        height: 83vh;
    }
    #formlogin{
        margin-top: 20vh;
        
    }
</style>
    
    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light" id="formlogin" method="post" action="validausuario.php">
                    <div class="mb-3">
                        <label for="txtemail" class="form-label">Email</label>
                        <input name="txtemail" type="email" class="form-control" id="txtemail" placeholder="Digite seu e-mail">
                        </div>
                    <div class="mb-3">
                        <label  for="txtsenha" class="form-label">Senha</label>
                        <input name="txtsenha" type="password" class="form-control" placeholder="Digite sua senha" id="txtsenha">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Lembre de mim</label>
                    </div>
                    <div>
                    <button type="button" class="btn btn-success">Entrar</button>
                    <a href="formusuario.php" ><button  type="button" class="btn btn-primary">cadastre-se</button></a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <?php include 'rodape.html' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

