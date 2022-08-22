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
        $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        function pares($valor){
            if($valor % 2 == 0){
                return $valor;
            }
        }

        $pares = array_filter($numeros, 'pares');

        echo '<pre>';
        print_r($pares);
        echo '<pre>';
        echo '<br> <br>';
    ?>
</body>
</html>