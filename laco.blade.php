<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laços de Repetição</title>
</head>
<body>
    <?php
        for ($cont = 0; $cont < 5; $cont++){
            echo $cont . PHP_EOL;
        }
        echo '<br> <br>';

        //Array de elemento
        $array = array(0, 1, 2, 3, 4);

        //Iterando item por item do array anterior
        for ($i = 0; $i < count($array); $i++){
            echo 'Item índice: ' . $i . 'Valor: '. $array[$i] . PHP_EOL;
        }
        echo '<br> <br>';

        for ($list = range(1, 5); count($list) > 0;){
            echo array_pop($list) . PHP_EOL; 
        }
        echo '<br> <br>';

        $frutas = array(
            'Abacaxi',
            'Caju',
            'Maçã',
            'Morango'
        );

        foreach ($frutas as $key => $value): 
            echo 'Chave: ' . $key . ', Valor: ' . $value . PHP_EOL;
        endforeach;
        echo '<br> <br>';

        $contador = 0;
        $valor = 0;
        while ($valor <= 5):
            echo $contador . PHP_EOL;
            $contador--;
            $valor++;
        endwhile;
        echo '<br> <br>';

        $cont = 0;

        do{//Executado pelo menos uma vez
            echo $cont++ . PHP_EOL;
        
        } while ($cont < 5);

        $cont = 0;

        //Loop Infinito
       /* while (true) {
            if ($cont >= 5){
                break;
            }

            echo $contador++ . PHP_EOL;
        } */

    ?>
</body>
</html>