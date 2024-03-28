<div class="container-register">

    <div>
        <form method="POST" action="{{route('confirm_login')}}">
            @csrf
            <div>
                <label for="emailInput" class="form-label">Correo electronico</label>
                <input class="form-control" id="emailInput" name="email" required type="email" placeholder="Ingrese su correo electronico">
            </div>
            <div>
                <label class="form-label" for="passwordInput">Contraseña</label>
                <input id="passwordInput" name="password" class="form-control" type="password" placeholder="Ingrese su contraseña" required>
            </div>
            <div>
            <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
            <label class="form-check-label" for="rememberCheck">Mantener sesion iniciada</label>
            </div>
            <div>
                <a class="text-button" href="{{ route('register_page') }}">Crear nueva cuenta</a>
            </div>
            <div>
                <button  type="submmit">Ingresar</button>
            </div>
        </form>

    </div>


</div>
