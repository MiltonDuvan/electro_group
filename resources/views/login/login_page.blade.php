<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesion</title>
    @vite(['resources/css/user/login.css'])
</head>

<body>
    <main>
        <div class="container-login">
            <div class="login-form">
                    <a href="home"><img src="image/logo_ecommerce.png" alt="Logo" class="logo"></a>
                <h2>Inicio de Sesión</h2>
                <form method="POST" action="{{ route('confirm_login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="emailInput" class="form-label">Correo electrónico</label>
                        <input class="form-control" id="emailInput" name="email" required type="email"
                            placeholder="Ingrese su correo electrónico">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="passwordInput">Contraseña</label>
                        <input id="passwordInput" name="password" class="form-control" type="password"
                            placeholder="Ingrese su contraseña" required>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
                        <label class="form-check-label" for="rememberCheck">Mantener sesión iniciada</label>
                    </div>
                    <div class="form-group">
                        <a class="text-button" href="{{ route('register_page') }}">Crear nueva cuenta</a>
                    </div>
                    <div class="form-group">
                        <button class="submit-button" type="submit">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>


    </main>
</body>

</html>
