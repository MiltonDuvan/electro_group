<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Grupo Mansion</title>
    @vite(['resources/css/home_page.css', 'resources/css/navbar.css'])
</head>

<body>
    <header>
        <x-navbar></x-navbar>

    </header>
    <main id="main-content">
        @if ($products->isNotEmpty())
            <div class="cont-cards">
                @foreach ($products as $product)
                    <div class="card">
                        <div class="card-content-sup">
                            <p class="title">{{ $product->name }}</p>
                        </div>
                        <div class="card-content">
                            <div class="card-content-img">
                                <img class="card-img" src="/image/{{ $product->cover_image }}">
                            </div>
                            <div class="card-content-sub">
                                <p>{{ $product->description }}
                                </p>
                                <div class="card-content-sub-sub">
                                    <p>{{ $product->price }} | precio nuevo</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <a href="{{ route('product_detail_page', $product->id) }}"><Button class="btn"
                                    type="submit">Comprar</Button></a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No hay productos disponibles</p>
        @endif
    </main>
</body>

</html>
