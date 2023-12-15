@if($user)
    <p>Welcome, {{ $user->name }}!</p>
@else
    <p>Welcome, Guest!</p>
@endif
<!DOCTYPE html>
<html>
<head>
    <title>Pizza Delivery</title>
</head>
<body>
    <h1>Pizza Menu</h1>
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
