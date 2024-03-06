  @include('components.nav')

  <div class="container">
      <h1>
          Detalles del curso
      </h1>
      @foreach ($courses as $course)
          <div class="card mb-3">
              <div class="card-body">
                  <h2 class="card-title">Nombre del curso: {{ $course->name }}</h2>
                  <p class="card-text">Categoria: {{ $course->categoria }}</p>
                  <p class="card-text">Tutor: {{ $course->tutor }}</p>
                  <p class="card-text">Descripción: {{ $course->descripcion }}</p>
                  <p class="card-text">Fecha de Inicio: {{ $course->fechaInicio }}</p>
                  <p class="card-text">Fecha de Finalización: {{ $course->fechaFinal }}</p>
                  <button class="btn btn-warning" type="submit">Favorito</button>
              </div>
          </div>
      @endforeach
  </div>

  @include('components.footer')
