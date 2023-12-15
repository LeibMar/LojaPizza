@if($user)
    <p>Bem vindo, {{ $user->name }}!</p>
@else
    <p>Bem vindo!</p>
@endif
<!DOCTYPE html>
<html>
<head>
    <title>PizzaAgora</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Cardápio</h1>
    <ul>
        @foreach($pizzas as $pizza)
            <li>
                <a href="{{ route('pizza.show', ['id' => $pizza->id]) }}">
                    {{ $pizza->name }} - ${{ $pizza->price }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
