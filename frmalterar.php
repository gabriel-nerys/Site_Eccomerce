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

        //recuperando os ids que foram enviados pela pagina lista.php
        $cd = $_GET['id'];
        $cd2 = $_GET['id2'];
        $cd3 = $_GET['id3'];
        
        $consulta = $cn->query("select * from tbl_tenis where cd_tenis='$cd'");
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

        $consultacat = $cn->query("select cd_categoria, ds_categoria from tbl_categoria where cd_categoria ='$cd2' union select cd_categoria, ds_categoria from tbl_categoria where cd_categoria !='$cd2'"); 
        $consultamarca = $cn->query("select cd_marca, nm_marca from tbl_marca where cd_marca ='$cd3' union select cd_marca, nm_marca from tbl_marca where cd_marca !='$cd3'"); 

?>



<style>
    body{
        height: 100vh;
    }
    
</style>
    
    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-md-10 mx-auto col-lg-5">
                <form name="incluirProd" enctype="multipart/form-data" class="p-4 p-md-5 border rounded-3 bg-light" id="incluirProd" method="post" action="alterarproduto.php">
                    
                    <h2 style="margin-bottom: 15px;">Cadastro de Produtos</h2>
                
                    <div class="mb-3">
                        <label for="txtemail" class="form-label">Categoria</label>
                        <select name="sltcat"  id="sltcat" class="form-control">
                            <?php while($exibecat = $consultacat->fetch(PDO::FETCH_ASSOC)){?>
                            <option value="<?php echo $exibecat['cd_categoria']; ?>"><?php echo $exibecat['ds_categoria']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="txtnome" class="form-label">Nome</label>
                        <input name="txtnometenis" value="<?php echo $exibe['nm_tenis']; ?>" type="text" class="form-control" id="nome" required id="txtnome">
                    </div>
                    <div class="mb-3">
                        <label for="txtemail" class="form-label">Marca</label>
                        <select name="sltmarca" id="sltmarc" class="form-control">
                            <?php while($listmarca = $consultamarca->fetch(PDO::FETCH_ASSOC)){?>
                            <option value="<?php echo $listmarca['cd_marca']; ?>"><?php echo $listmarca['nm_marca']; ?></option>
                            <?php } ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="txtnumero" class="form-label">Numero</label>
                        <input name="txttamanho" value="<?php echo $exibe['no_med']; ?>" autocomplete="off" maxlength="2" type="text" class="form-control" id="txttamanho" required id="txttamanho">
                    </div>
                    <div class="mb-3">
                        <label  for="txtpreco" class="form-label">Preço</label>
                        <input name="txtpreco" value="<?php echo $exibe['vl_preco']; ?>" type="text" class="form-control" required id="txtpreco" id="txtpreco">
                    </div>                    
                    <div class="mb-3">
                        <label for="estoque">Estoque</label>
                        <input name="txtestoque" value="<?php echo $exibe['qt_estoque']; ?>" type="text" class="form-control" id="txtestoque" required id="txtestoque">
                    </div>
                    <div class="mb-3">
                        <label for="cidade">Descrição</label>
                        <input name="txtdescricao" value="<?php echo $exibe['ds_resumo_tenis']; ?>" rows="5" type="text" class="form-control" id="txtdescricao" required id="txtdescricao">
                    </div>
                    <div class="mb-3">
                        <label for="cep">Foto principal</label>
                        <input name="txtfoto" value="<?php echo $exibe['ds_tenis_img']; ?>" accept="img/*" type="file" class="form-control" id="txtfoto" required id="txtfoto">
                    </div>

                    <div class="mb-3">
                        <label for="cep">Lançamento?</label>
                        <select name="sltlanc" id="sltlanc" class="form-control">
                            
                            <option value="<?php echo $exibe['sg_lancamento']; ?>"><?php echo $exibe['sg_lancamento']; ?></option>
                            <option value="S">Sim</option>
                            <option value="N">Não</option>
                                                      
                        </select>     
                    </div>
                    
                    <div>
                    <button name="acao" type="submit" class="btn btn-success">Alterar</button>
                    <a href="login.php" ><button  type="button" class="btn btn-primary">Excluir</button></a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <?php include 'rodape.html' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    
</body>
</html>