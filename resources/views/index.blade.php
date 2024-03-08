@include('layouts.nav')

</header>
<section class="hero bg-gray-100 py-20">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold">Bienvenido al Centro de Formación</h1>
        <p class="mt-4 text-lg">¡Empieza tu viaje hacia el éxito con nosotros!</p>
        <div class="mt-2 m-4 grid">
            <table class=" md:border-collapse hover:border-collapse table-auto">
                <thead>
                    <tr class="border-black border-b-2 ">
                        <th class="px-4 py-2 ">Nombre</th>
                        <th class="px-4 py-2 ">Tutor</th>
                        <th class="px-4 py-2 ">Categoría</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td class="px-4 py-2 ">
                                <a href="courses/{{ $course->id }}" class=" hover:underline">{{ $course->name }}</a>
                            </td>
                            <td class="px-4 py-2">
                                <a href="courses/{{ $course->id }}" class=" hover:underline">{{ $course->tutor }}</a>
                            </td>
                            <td class="px-4 py-2">
                                <a href="courses/{{ $course->id }}"
                                    class=" hover:underline">{{ $course->categoria }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $courses->links('pagination.custom') }}
        </div>
    </div>
</section>

<section class="about bg-gray-200 py-20">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold">Sobre Nosotros</h2>
        <p class="mt-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet neque ac ligula
            ultrices, vel laoreet turpis bibendum.</p>
    </div>
</section>

@include('layouts.footer')
