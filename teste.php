<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <?php
        include 'conexao.php';
        $consulta = $cn->query('select*from vw_tenis');
        while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){

        echo $exibe['nm_tenis'].'<br>';
        echo $exibe['vl_preco'].'<br>';
        echo $exibe['ds_categoria'].'<br><br>';
        echo '<hr>';
        }
    ?>
</body>
</html>