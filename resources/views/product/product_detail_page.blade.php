<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Producto</title>
    @vite(['resources/css/navbar.css', 'resources/css/product/product_detail.css'])
</head>

<body>
    <main>
        <x-navbar></x-navbar>
        <div class="contenedor">
            <article>
                <div class="image-gallery">
                    @if($product->image1)
                        <img class="main-image" src="/image/{{ $product->image1 }}" alt="Image1">
                    @else
                        <img class="main-image" src="/image/no_found.jpg" alt="Imagen por defecto">
                    @endif
                
                    @if($product->image2)
                        <img class="main-image" src="/image/{{ $product->image2 }}" alt="Image2">
                    @else
                        <img class="main-image" src="/image/no_found.jpg" alt="Imagen por defecto">
                    @endif
                
                    @if($product->image3)
                        <img class="main-image" src="/image/{{ $product->image3 }}" alt="Image3">
                    @else
                        <img class="main-image" src="/image/no_found.jpg" alt="Imagen por defecto">
                    @endif
                </div>
                
                <div>
                    <img class="main-image" src="/image/{{ $product->cover_image }}" alt="Imagen principal">
                </div>
            </article>
            <article>
                <h2>{{ $product->name }}</h2>
                <span>{{ $product->brand }}</span>
                <p>{{ $product->description }}</p>

                <div class="product-details">
                    <p>Precio: {{ $product->price }}</p>
                    <p>Disponibilidad:{{ $product->stock }}</p>
                </div>

                <div>
                    @if ($product->stock == 0)
                        <p>Producto agotado</p>
                    @else
                        <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="POST">
                            @csrf
                            <button type="submit">Agregar al carrito</button>
                        </form>
                    @endif
                </div>
            </article>
        </div>
    </main>
</body>

</html>
