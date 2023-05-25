<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="jquery-mask/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="jquery-mask/jQuery-Mask-Plugin-master/dist/jquery.mask.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script>
        $(document).ready(function(){
            $('#cep"]').mask('00000-000');
            $('#telefone').mask('(00) 0000-00009');
            $('#celular').mask('(00) 00000-0000');
            
        });
    </script>
    <title>Usuario</title>
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
        margin-top: 5vh;
        
    }
</style>
    
    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light" id="formlogin" method="post" action="validausuario.php">
                    <div class="mb-3">
                        <label for="txtemail" class="form-label">Nome</label>
                        <input name="nome" type="email" class="form-control" id="nome" required id="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="mb-3">
                        <label for="txtemail" class="form-label">Email</label>
                        <input name="txtemail" type="email" class="form-control" id="txtemail" required id="txtemail" placeholder="Digite seu e-mail">
                    </div>
                    <div class="mb-3">
                        <label  for="txtsenha" class="form-label">Senha</label>
                        <input name="txtsenha" type="password" class="form-control" required id="txtsenha" placeholder="Digite sua senha" id="txtsenha">
                    </div>
                    <div class="mb-3">
                        <label for="endereco">Endereço:</label>
                        <textarea name="endereco" type="text" rows="3" class="form-control" id="endereco" required id="endereco" placeholder="Digite seu endereço"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="cidade">Cidade:</label>
                        <input name="cidade" type="text" class="form-control" id="cidade" required id="cidade" placeholder="Digite sua cidade">
                    </div>
                    <div class="mb-3">
                        <label for="cep">CEP:</label>
                        <input name="cep" autocomplete="off" maxlength="9" type="text" class="form-control" id="cep"  placeholder="Digite seu CEP" required id="cep">
                    </div>
                    
                    <div>
                    <button type="button" class="btn btn-success">Cadastrar</button>
                    <a href="login.php" ><button  type="button" class="btn btn-primary">Voltar</button></a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <?php include 'rodape.html' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    
</body>
</html>