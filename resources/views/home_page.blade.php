<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <title>Grupo Mansion</title>
    @vite(['resources/css/home_page.css'])
   

</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo-container">
                <img class="logo" src="{{ asset('image/logo.svg') }}" alt="logo">
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

    </header>

</body>

</html>
