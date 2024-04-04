<nav class="navbar">
    <div class="logo-container">
        <a href="{{ route('home_page') }}"><img class="logo" src="{{ asset('image/logo_ecommerce.png') }}"
                alt="logo"></a>

    </div>
    <div class="btn-input">
        <div class="button-container">

            @auth
            @else
                <button class="button">
                    <i class="fas fa-bars"></i>
                    Bienvenido </button>
            @endauth
            @auth
            <a href="{{ route('manage_products_page') }}" class="button2">
                <i class="fas fa-bars"></i>
                Crear producto
            </a>
            @endauth

        </div>
        <div>
            <div class="input-container">
                <form action="{{ route('search_results_page') }}" method="GET">
                    <input type="text" name="search" placeholder="Buscar...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>

</nav>

<div class="nav">
    <div class="cont-nav-1">
        <ul class="cont-current-tab">
            <li><a href="{{ route('home_page') }}">RECOMENDADOS</a></li>
            <li><a href="{{ route('best_seller_page') }}">MAS VENDIDOS</a></li>
        </ul>
    </div>
    <div class="cont-nav-2">
        <ul class="cont-current-tab">
            @auth
            @else
                <li><a href="{{ route('login') }}">Ingresa</a></li>
            @endauth
            @auth

                <li><a href="{{ route('cart.show') }}"><i class="fas fa-shopping-cart"></i> Carrito</a></li>
            <a href="{{ route('confirm_logout') }}"><button type="button">Salir</button></a> @endauth

        </ul>
    </div>

</div>
</div>
