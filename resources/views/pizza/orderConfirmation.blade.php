<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Order Confirmation</h1>
    <p>Thank you, {{ $user->name }}, for your order!</p>
    <p>You have ordered {{ $pizza->name }}. Enjoy your meal!</p>
    <a href="{{ route('pizza.index') }}">Back to Menu</a>
</body>
</html>
