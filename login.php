<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <style>
        body{
            font-family: 'Open Sans', sans-serif;
        }
        .title{
            
            font-size: 28px;
            font-weight: bold;
            text-transform: capitalize;
        }
        .title-welcome{
            color: #fff;
        }
    </style>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-welcome">Bem vindo de volta!</h2>
                <p class="description">Para se manter conectado conosco</p>
                <p class="description">Faça login com suas informações pessoais</p>
                <button class="btn">Entrar</button>
            </div>

            <div class="second-column">
                <h2 class="title ">Crie sua conta</h2>
                <p class="description">Digite seu e-mail e senha.</p>
                <form class="form">
                    <input type="text" placeholder="Nome">
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Senha">
                    <button class="btn">Criar</button>
                </form>
            </div>       
            
        </div>

        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-welcome">Olá!</h2>
                <p class="description">Insira seus dados pessoais</p>
                <p class="description">E conheça nossa loja</p>
                <button class="btn">Criar</button>
            </div>

            <div class="second-column">
                <h2 class="title">Faça login</h2>
            </div>
            <p class="description">Ou use seu e-mail para registro</p>
            <form class="form">                
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Senha">
                <a href="#">Esqueceu a senha?</a>
                <button class="btn">Criar</button>
            </form>
        </div>
    </div>
</body>
</html>