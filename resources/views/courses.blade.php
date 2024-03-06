@include('components.nav')
<div class="container">
    <h1>Detalles del curso</h1>
    <h2>Nombre del curso: {{ $course->name }}</h2>
    <p>Categoria: {{ $course->categoria }}</p>
    <p>Tutor: {{ $course->tutor }}</p>
    <p>Descripción: {{ $course->descripcion }}</p>
    <p>Fecha de Inicio: {{ $course->fechaInicio }}</p>
    <p>Fecha de Finalizacion: {{ $course->fechaFinal }}</p>
    <button class="btn btn-warning" type="submit">Favorito  </button>
</div>
@include('components.footer')
