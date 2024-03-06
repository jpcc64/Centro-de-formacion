@include('components.nav')

</header>
<section class="hero">
    <div class="container">
        <h1>Bienvenido al Centro de Formación</h1>
        <p>¡Empieza tu viaje hacia el éxito con nosotros!</p>
        <div class="row">
            <table class="table fa-border-all">
                <thead>
                    <tr>
                        <th class="col">Nombre</th>
                        <th class="col">Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @foreach ($courses as $course)
                                <p id="{{ $course->id }}">
                                    <a class="text-decoration-none text-dark"
                                        href="courses/{{ $course->id }}">{{ $course->name }}</a>
                                </p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($courses as $course)
                                <p id="{{ $course->id }}">
                                    <a class="text-decoration-none text-dark"
                                        href="courses/{{ $course->id }}">{{ $course->categoria }}</a>
                                </p>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
              {{ $courses->links() }}
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <h2>Sobre Nosotros</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet neque ac ligula ultrices, vel
            laoreet turpis bibendum.</p>
    </div>
</section>
  
@include('components.footer')
