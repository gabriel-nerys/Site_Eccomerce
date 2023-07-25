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
            $('#txtcep"]').mask('00000-000');
            $('#telefone').mask('(00) 0000-00009');
            $('#celular').mask('(00) 00000-0000');
            
        });
    </script>
    <title>Usuario</title>
</head>
<body>
<?php 
        session_start();

        if(empty($_SESSION['Status']) || $_SESSION['Status'] != 1){
            header('location: login.php');
        }

        include 'conexao.php' ;
        include 'nav.php' ;

        
        $consultacat = $cn->query("select * from tbl_categoria"); 
        $consultamarca = $cn->query("select * from tbl_marca"); 

?>



<style>
    body{
        height: 100vh;
    }
    
</style>
    
    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-md-10 mx-auto col-lg-5">
                <form name="formproduto" enctype="multipart/form-data" class="p-4 p-md-5 border rounded-3 bg-light" id="formproduto" method="post" action="inserirproduto.php">
                    
                    <h2 style="margin-bottom: 15px;">Cadastro de Produtos</h2>
                
                    <div class="mb-3">
                        <label for="txtemail" class="form-label">Categoria</label>
                        <select name="sltcat" id="sltcat" class="form-control">
                            <option value=""  selected>Selecione</option>
                            <?php while($listcat = $consultacat->fetch(PDO::FETCH_ASSOC)){?>
                            <option value="<?php echo $listcat['cd_categoria']; ?>"><?php echo $listcat['ds_categoria']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="txtnome" class="form-label">Nome</label>
                        <input name="txtnometenis" type="text" class="form-control" id="nome" required id="txtnome" placeholder="Digite o nome do produto">
                    </div>
                    <div class="mb-3">
                        <label for="txtemail" class="form-label">Marca</label>
                        <select name="sltmarca" id="sltmarc" class="form-control">
                            <option value=""  selected>Selecione</option>
                            <?php while($listmarca = $consultamarca->fetch(PDO::FETCH_ASSOC)){?>
                            <option value="<?php echo $listmarca['cd_marca']; ?>"><?php echo $listmarca['nm_marca']; ?></option>
                            <?php } ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="txtnumero" class="form-label">Numero</label>
                        <input name="txttamanho" autocomplete="off" maxlength="2" type="text" class="form-control" id="txttamanho" required id="txttamanho" placeholder="Digite o tamanho">
                    </div>
                    <div class="mb-3">
                        <label  for="txtpreco" class="form-label">Preço</label>
                        <input name="txtpreco" type="text" class="form-control" required id="txtpreco" placeholder="Digite o valor" id="txtpreco">
                    </div>                    
                    <div class="mb-3">
                        <label for="estoque">Estoque</label>
                        <input name="txtestoque" type="text" class="form-control" id="txtestoque" required id="txtestoque" placeholder="Quantidade em estoque">
                    </div>
                    <div class="mb-3">
                        <label for="cidade">Descrição</label>
                        <textarea name="txtdescricao" rows="5" type="text" class="form-control" id="txtdescricao" required id="txtdescricao" placeholder="Digite a descrição"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="cep">Foto principal</label>
                        <input name="txtfoto" accept="img/*" type="file" class="form-control" id="txtfoto" required id="txtfoto">
                    </div>

                    <div class="mb-3">
                        <label for="cep">Lançamento?</label>
                        <select name="sltlanc" id="sltlanc" class="form-control">
                            <option value=""  selected>Selecione</option>
                            <option value="S">Sim</option>
                            <option value="N">Não</option>
                        </select>     
                    </div>
                    
                    <div>
                    <button name="acao" type="submit" class="btn btn-success">Cadastrar</button>
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