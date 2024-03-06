@include('components.nav')

<div class="container">
    <div class="card">
        <div class="card-body p-5 bg-light rounded-3">
            <form method="POST" action="{{ route('validar') }}">
                @csrf <!-- Directiva de Blade para agregar el token CSRF -->

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="btn btn-primary">Registrarse</button>
            </form>
        </div>
    </div>
</div>


@include('components.footer')
