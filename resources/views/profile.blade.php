@include('components.nav')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Tus datos:</h1>

                <h2>Nombre: {{ Auth::user()->name }}</h2>
                <h2>Email: {{ Auth::user()->email }}</h2>
        </div>
    </div>
</div>


@include('components.footer')

