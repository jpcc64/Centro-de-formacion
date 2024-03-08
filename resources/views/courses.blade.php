@include('layouts.nav')

<div class="container mx-auto py-8">

    <h1 class="text-4xl font-bold mb-4">Detalles del curso</h1>
    @include('components.favorite-flash')
    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-2">Nombre del curso: {{ $course->name }}</h2>
        <p class="text-lg mb-2">Categoria: {{ $course->categoria }}</p>
        <p class="text-lg mb-2">Tutor: {{ $course->tutor }}</p>
        <p class="text-lg mb-2">Descripción: {{ $course->descripcion }}</p>
        <p class="text-lg mb-2">Fecha de Inicio: {{ $course->fechaInicio }}</p>
        <p class="text-lg mb-2">Fecha de Finalización: {{ $course->fechaFinal }}</p>
        <form action="{{ route('favoritos') }}" method="POST"><input type="hidden" name="id"
                value="{{ $course->id }}" />
            @csrf
            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded"
                type="submit">Favorito</button>
        </form>
    </div>
</div>

@include('layouts.footer')
