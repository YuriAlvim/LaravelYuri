<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futebol</title>
</head>
<body>
    <?php
        $frutas = [
            5 => 'banana',
            46 => 'maça',
            20 => 'kiwi',
            90 => 'manga',
            32 => 'abacaxi',
            6 => 'pêra',
            78 => 'coco',
            1 => 'goiaba',
            66 => 'melancia',
            29 => 'romã',
            11 => 'caqui'
        ];

            echo '<pre>';
            print_r($frutas);
            echo '<pre>';
            echo '<br> <br>';

            asort($frutas);
            echo '<pre>';
            print_r($frutas);
            echo '<pre>';
            echo '<br> <br>';

            arsort($frutas);
            echo '<pre>';
            print_r($frutas);
            echo '<pre>';
            echo '<br> <br>';

            sort($frutas);
            echo '<pre>';
            print_r($frutas);
            echo '<pre>';
            echo '<br> <br>';
    ?>
</body>
</html>