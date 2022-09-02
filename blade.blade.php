<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade</title>
</head>
<body>
    @if(10>5)
    <p>A condição é True</p>
    @endif
    <br> <br>

    <?php
        if (10 > 5):
            echo '<p>A condição é True</p>';
    endif;
        
    ?>
    <br> <br>

    @if($nome == 'Yuri')
        <p>O nome é Yuri</p>
    @else
        <p>O nome não é Yuri</p>
    @endif
    <br> <br>

    {{$nome}}
    <br> <br>


    <?php echo $nome; ?>
    <br> <br>

    @if($nome == 'YunYun')
        <p>O nome é {{$nome}} e ela tem {{$idade}} anos</p>
    @elseif($nome == 'Yuri')
        <p>O nome é <?php echo $nome; ?> e ela tem <?php echo $idade; ?> anos</p>  
    @endif  
</body>
</html>