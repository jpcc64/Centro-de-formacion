@include('layouts.nav')<div class="container mx-auto">

    @include('components.favorite-flash')
    <div class="bg-white shadow-md rounded-md p-6">
        <h1 class="text-2xl font-semibold mb-4">Tus datos:</h1>

        <div class="mb-4">
            <h2 class="text-lg font-semibold">Nombre:</h2>
            <p>{{ Auth::user()->name }}</p>
        </div>
        <div class="mb-4">
            <h2 class="text-lg font-semibold">Email:</h2>
            <p>{{ Auth::user()->email }}</p>
        </div>

        <div>
            <div class="text-2xl">Tus cursos favoritos:</div>

            @foreach ($favoritos as $favorito)
                <div class="mb-4">
                    <h2 class="text-lg font-semibold">{{ $favorito->name }}</h2>
                    <p>{{ $favorito->descripcion }}</p>
                    <p>{{ $favorito->tutor }}</p>

                </div>
                <form action="{{ route('borrar', ['id' => $favorito->id]) }}" method="POST" class="inline-block">
                    @method('DELETE')
                    @csrf
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                        type="submit">Borrar</button>
                </form>
            @endforeach
        </div>

        <a name="logout" id="logout"
            class="bg-sky-800 hover:bg-sky-800-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            href="{{ route('logout') }}" role="button">Logout</a>

    </div>
</div>



@include('layouts.footer')
