<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h3>CONSEGUI LOGAR NO SISTEMA</h3>
    <h5>{{ auth()->user()->name }}</h5>
    <p>
        <a href="{{ route('login.logout') }}" class="btn btn-danger">
            Sair
        </a>
    </p>

</body>

</html>
