<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 3</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="bg-warning">
    <div>
        <div class="container-fluid flex border border-dark p-3 my-3 bg-white">
            <img src="{{ asset('img/odeiowebp.webp') }}" alt="outerwilds" class="img-fluid">
        </div>

        <div class="container-fluid flex border border-dark p-3 my-3 bg-white">
            <img src="{{ asset('img/outerwilds.jpg') }}" alt="outerwilds" class="w-50">
        </div>

        <div class="container-fluid flex border border-dark p-3 my-3 bg-white">
            <img src="{{ asset('img/odeiowebp.webp') }}" alt="outerwilds" class="rounded-circle">
        </div>

        <div class="container-fluid flex border border-dark p-3 my-3 bg-white">
            <img src="{{ asset('img/odeiowebp.webp') }}" alt="outerwilds" class="w-50 rounded-circle">
        </div>

        <div class="container-fluid flex border border-dark p-3 my-3 bg-white">
            <img src="{{ asset('img/odeiowebp.webp') }}" alt="outerwilds" class="w-25 d-block">
            <img src="{{ asset('img/odeiowebp.webp') }}" alt="outerwilds" class="w-25 d-block">
        </div>

        <div class="container-fluid flex border border-dark p-3 my-3 bg-white">
            <img src="{{ asset('img/odeiowebp.webp') }}" alt="outerwilds" class="w-25">
            <img src="{{ asset('img/odeiowebp.webp') }}" alt="outerwilds" class="w-25">
            <img src="{{ asset('img/odeiowebp.webp') }}" alt="outerwilds" class="w-25">
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>