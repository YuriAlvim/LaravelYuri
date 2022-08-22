<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro</title>
</head>
<body>
    <?php
    $senha = 'bilawbaubau';
    echo $senha . '<br> <br>';

    //Criptografia Base 64
    $valor_cripto = base64_encode($senha);
    echo $valor_cripto;
    echo '<br> <br>';

    //MD5
    $valor_cripto = md5($senha);
    echo $valor_cripto;
    echo '<br> <br>';

    //SHA1
    $valor_cripto = sha1($senha);
    echo $valor_cripto;
    echo '<br> <br>';
    ?>
</body>
</html>