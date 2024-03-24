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
            <div>
                <ul class="cont-current-tab">
                    <li><a href="#" onclick="loadPage('toGoBestSeller')">MAS VENDIDOS</a></li>
                    <li><a href="#" onclick="loadPage('toGoRecommended')">RECOMENDADOS</a></li>
                </ul>
            </div>
            <div>
                <ul class="cont-current-tab">
                    <li><a href="#">Crea tu cuenta</a></li>
                    <li><a href="#">Ingresa</a></li>
                </ul>
            </div>
        </div>

    </header>
    <main id="main-content">
        {{-- muestra pagina 1 o pagina 2 --}}
    </main>
    <script src="{{ mix('resources/js/home_page.js') }}"></script>

</body>

</html>
