<nav class="navbar">
    <div class="logo-container">
        <a href="{{route('home_page')}}"><img class="logo" src="{{ asset('image/logo_ecommerce.png') }}" alt="logo"></a>
        
    </div>
    <div class="btn-input">
        <div class="button-container">
            <button class="button">
                <i class="fas fa-bars"></i>
                Nuestras Categorias </button>
        </div>
        <div class="input-container">
            <input type="text" placeholder="Buscar...">
            <i class="fas fa-search"></i>
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
        <p> Bienvenido @auth {{ Auth::user()->name }} @endauth
        </p>

        <ul class="cont-current-tab">

            <li><a href="{{ route('login') }}">Ingresa</a></li>
            @auth <a href="{{ route('confirm_logout') }}"><button type="button">Salir</button></a> @endauth

        </ul>

    </div>

</div>
</div>
