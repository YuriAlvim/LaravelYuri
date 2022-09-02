<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade Segundo</title>
</head>
<body>
    @for($i = 0; $i < count($rifa); $i++)
        <p> {{$rifa[$i]}} </p>
    @endfor

    @for($i = 0; $i < count($rifa); $i++)
        @if($rifa[$i] == 7)
            <p style="color: red"> {{$rifa[$i]}} </p>
        @else
            <p style="color: blue"> {{$rifa[$i]}} </p>
        @endif
    @endfor

    @php
        $escola = "SENAI";
        echo $escola;
    @endphp

    {{--comentário--}}

    @foreach($rifa as $rf)
        <p>{{$rf}}</p>
    @endforeach
</body>
</html>