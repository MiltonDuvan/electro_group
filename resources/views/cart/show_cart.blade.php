<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito Compras</title>
    @vite(['resources/css/navbar.css', 'resources/css/cart/cart.css'])
</head>

<body>
    <header>
        <x-navbar> </x-navbar>
    </header>
        <div class="container">
            <h1>Carrito de Compras</h1>
            @if ($cartItems->isEmpty())
                <p>No hay elementos en el carrito</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Subtotal</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $cartItem)
                            <tr>
                                <td>{{ $cartItem->product->name }}</td>
                                <td>{{ $cartItem->quantity }}</td>
                                <td>{{ $cartItem->product->price }}</td>
                                <td>{{ $cartItem->quantity * $cartItem->product->price }}</td>
                                <td>
                                    <form action="{{ route('cart.remove', $cartItem->product_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-right">
                    <h3>Total:
                        {{ $cartItems->sum(function ($item) {return $item->quantity * $item->product->price;}) }}</h3>
                   
                    <form action="{{ route('cart.checkout') }}" method="POST">
                        @csrf
                        <button class="btn btn-primary" type="submit">Realizar Pedido</button>
                    </form>
                    
                </div>
            @endif
        </div>

</body>

</html>
