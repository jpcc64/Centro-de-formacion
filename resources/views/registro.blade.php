@include('layouts.nav')
<div class="flex justify-center">
    <div class="bg-white rounded-lg shadow-lg p-5 w-full md:w-80">
        <form method="POST" action="{{ route('validar') }}">
            @csrf <!-- Directiva de Blade para agregar el token CSRF -->

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="mt-1 p-2 w-full border rounded-md" required>
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md" required>
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md"
                    required>
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="bg-sky-800 hover:bg-sky-800-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Registrarse</button>
        </form>
    </div>
</div>


@include('layouts.footer')
