<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <title>Registrarse</title>
    @vite(['resources/css/user/register.css'])
</head>

<body>
    <header>

    </header>
    <main id="main-content">
        <div class="container-register">
            <form method="POST" action="{{ route('confirm_registration') }}" class="register-form">
                <div class="image-container">
                    <img src="image/logo_ecommerce.png" alt="Logo" class="logo"> <!-- Agrega la imagen -->
                </div>
                @csrf
                <div class="form-group">
                    <label class="form-label" for="nameInput">Nombre*</label>
                    <input class="form-control" id="nameInput" name="name" required autocomplete="disable"
                        type="text" placeholder="Ingrese su nombre">
                </div>
                <div class="form-group">
                    <label class="form-label" for="lastnameInput">Apellidos*</label>
                    <input class="form-control" id="lastnameInput" name="lastname" required autocomplete="disable"
                        type="text" placeholder="Ingrese sus apeliidos">
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Correo electronico</label>
                    <input class="form-control" id="email" type="email" name="email" required
                        autocomplete="disable" placeholder="Ingrese su correo electronico">
                </div>
                <div class="form-group">
                    <label class="form-label" for="passwordInput">Contraseña</label>
                    <input class="form-control" id="passwordInput" type="password" name="password" required
                        placeholder="Ingrese su contraseña">
                </div>
                <button type="submit" class="submit-button">Registrarse</button>
            </form>
        </div>
    </main>
</body>

</html>
