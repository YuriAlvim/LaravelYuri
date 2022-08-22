<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musica</title>
</head>
<body>
    <?php
        $dj = ['Tiësto', 'Steve Aoki', 'David Guetta', 'Skrillex', 'Martin Garrix', 'Axwell', 'Sudarius', 'Benny Benassi'];

        $cantor = ['The Weekend'];

        $cantora = ['Sia', 'Beyonce', 'Britney Spears', 'Madonna', 'Adele' ];

        $banda = ['Kiss', 'Queen', 'ABBA'];

        echo '<pre>';
        print_r($dj);
        echo '<pre>';
        echo '<br> <br>';

        // Is Arrays

        if (is_array($dj)){
            echo 'É um array';
        }
        else{
            echo 'Não é um array';
        }
        echo '<br> <br>';

        // In Arrays

        if(in_array('Sia', $cantora)){
            echo 'É cantora';
        }
        else{
            echo 'Não é cantora';
        }
        echo '<br> <br>';

        // Count

        echo count($dj);
        echo '<br> <br>';

        // Unir Arrays

        $artistas = array_merge($dj, $cantora, $banda);
        echo '<pre>';
        print_r($artistas);
        echo '<pre>';
        echo '<br> <br>';

        // Adicionar elemento no final do array

        array_push($cantora, $cantor);
        echo '<pre>';
        print_r($cantora);
        echo '<pre>';
        echo '<br> <br>';

        $musicos = $artistas;
        echo '<pre>';
        print_r($musicos);
        echo '<pre>';
        echo '<br> <br>';

        // Adicionar elemento no começo do array
        array_unshift($banda, $cantor);
        echo '<pre>';
        print_r($banda);
        echo '<pre>';
        echo '<br> <br>';

        // Remover o primeiro elemento do array
        array_shift($banda);
        echo '<pre>';
        print_r($banda);
        echo '<pre>';
        echo '<br> <br>';
        
    ?>
</body>
</html>