<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Grupo Mansion</title>
    @vite(['resources/css/home_page.css', 'resources/js/home_page.js'])
</head>

<body>
    <header>
        <x-navbar></x-navbar>

    </header>
    <main id="main-content">
        @if ($products->isNotEmpty())
            @foreach ($products as $product)
                <div class="cont-cards">
                    <div class="card">
                        <div class="card-content-sup">
                            <p>Descuento</p>
                        </div>
                        <div class="card-content">
                            <div class="card-content-img">
                                <img class="card-img" src="/image/{{ $product->cover_image }}" width="60%">
                            </div>
                            <div class="card-content-sub">
                                <p>{{ $product->name }}</p>
                                <p>{{ $product->description }}
                                </p>
                                <div class="card-content-sub-sub">
                                    <p>{{ $product->price }} | precio nuevo</p>

                                </div>
                            </div>
                        </div>


                        <div class="footer">
                            <a href="{{ route('product_detail_page') }}"><Button type="submit">Comprar</Button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No hay productos disponibles</p>
        @endif
    </main>
    <script src="{{ mix('resources/js/product/manage_product.js') }}"></script>
</body>

</html>
