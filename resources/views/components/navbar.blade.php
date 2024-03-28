
<nav class="navbar">
    <div class="logo-container">
        <img class="logo" src="{{ asset('image/logo_ecommerce.png') }}" alt="logo" width="20%">
    </div>
    <div class="button-container">
        <button class="button">
            <i class="fas fa-bars"></i>
            Nuestras Categorias </button>
    </div>
    <div class="input-container">
        <input type="text" placeholder="Buscar...">
    </div>
</nav>

<div class="nav">
    <p>Bienvenido @auth {{Auth::user()->name}} @endauth</p>
    <div>
        <ul class="cont-current-tab">
            <li><a href="{{route('home_page')}}">MAS VENDIDOS</a></li>
            <li><a href="{{route('recommended_page')}}">RECOMENDADOS</a></li>
        </ul>
    </div>
    <div>
        <ul class="cont-current-tab">
            <li><a href="{{route('login')}}" >Ingresa</a></li>
         
           @auth <a href="{{route('confirm_logout')}}"><button type="button">Salir</button></a> @endauth
         
    
        </ul>
    </div>
</div>