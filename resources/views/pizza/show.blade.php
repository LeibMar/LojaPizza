@if($user)
    <p>Logged in as: {{ $user->name }}</p>
@else
    <p>Guest user</p>
@endif
<!DOCTYPE html>
<html>
<head>
    <title>{{ $pizza->name }} - Pizza Details</title>
</head>
<body>
    <h1>{{ $pizza->name }}</h1>
    <p>{{ $pizza->description }}</p>
    <p>Price: ${{ $pizza->price }}</p>
    <a href="{{ route('pizza.index') }}">Back to Menu</a>
</body>
</html>
@if($user)
    <form action="{{ route('pizza.confirmOrder', ['id' => $pizza->id]) }}" method="POST">
        @csrf
        <button type="submit">Confirm Order</button>
    </form>
@else
    <p>Please log in to place an order.</p>
@endif