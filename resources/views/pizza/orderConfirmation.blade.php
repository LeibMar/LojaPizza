<!DOCTYPE html>

<html>
<head>
    <title>Confirmar pedido<</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Confirmar pedido</h1>
    <p>Obrigado, {{ $user->name }}, pelo pedido!</p>
    <p>Você pediu{{ $pizza->name }}. </p>
    <a href="{{ route('pizza.index') }}">Voltar</a>
</body>
</html>
