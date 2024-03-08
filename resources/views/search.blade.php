@include('layouts.nav')
<div class="container">
    @include('components.favorite-flash')
    <h1 class="text-4xl decoration-underline mt-4 mb-2">
        Detalles del curso
    </h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 ">
        @foreach ($courses as $course)
            <div class="border-black border-2 rounded bg-gray-200 flex ">
                <div class="md:container md:mx-auto p-3 grid">
                    <h2 class="font-semibold">Nombre del curso: </h2>
                    <p>{{ $course->name }}</p>
                    <p class="font-semibold">Categoria:</p>
                    <div>{{ $course->categoria }}</div>
                    <p class="font-semibold">Tutor: </p>
                    <div>{{ $course->tutor }}</div>
                    <p class="font-semibold">Descripción: </p>
                    <div>{{ $course->descripcion }}</div>
                    <p class="font-semibold">Fecha de Inicio: </p>
                    <div>{{ $course->fechaInicio }}</div>
                    <p class="font-semibold">Fecha de Finalización: </p>
                    <div>{{ $course->fechaFinal }}</div>

                    <form action="{{ route('favoritos') }}" method="POST"><input type="hidden" name="id"
                            value="{{ $course->id }}" />
                        @csrf
                        <button
                            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded justify-self-end"
                            type="submit">Favorito</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

</div>

@include('layouts.footer')
