<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de compras</title>
</head>
<body>
    <?php
        $lista = ['Batata', 'Arroz', 'Feijão', 'Batata', 'Maionese', 'Batata', 'Maionese'];


        echo '<pre>';
        print_r($lista);
        echo '<pre>';
        echo '<br> <br>';

        //Eliminar items repetidos de um Array
        array_unique($lista);
        echo '<pre>';
        print_r(array_unique($lista));
        echo '<pre>';
        echo '<br> <br>';

        
    ?>
</body>
</html>