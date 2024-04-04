<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados de la búsqueda</title>
    @vite(['resources/css/search/search.css','resources/css/navbar.css'])
</head>
<body>
    <main>
        <x-navbar></x-navbar>
    <div class="container">
        <h1>Resultados de la búsqueda</h1>
        <div class="products">
            @if ($products->count() > 0)
                @foreach ($products as $product)
                    <div class="product">
                        <h2>{{ $product->name }}</h2>
                        <p>{{ $product->description }}</p>
                        <p>Precio: ${{ $product->price }}</p>
                        <p>Marca: {{ $product->brand }}</p>
                        <p>Stock: {{ $product->stock }}</p>
                        <!-- Mostrar imágenes -->
                        @if($product->cover_image)
                            <img src="{{ asset('image/' . $product->cover_image) }}" alt="Cover Image">
                        @endif
                        @if($product->image1)
                            <img src="{{ asset('image/' . $product->image1) }}" alt="Image 1">
                        @endif
                        @if($product->image2)
                            <img src="{{ asset('image/' . $product->image2) }}" alt="Image 2">
                        @endif
                        @if($product->image3)
                            <img src="{{ asset('image/' . $product->image3) }}" alt="Image 3">
                        @endif
                    </div>
                @endforeach
            @else
                <p class="no-products">No se encontraron productos</p>
            @endif
        </div>
    </div>
</main>
</body>
</html>
