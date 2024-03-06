<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Centro de Formación</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/path/to/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Centro de Formacion</a>

                <!-- Botón de hamburguesa para dispositivos pequeños -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Contenedor de elementos de navegación y formulario de búsqueda -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/cursos">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Contacto</a>
                        </li>
                    </ul>

                </div>
                <form class="d-flex" action="/search" method="GET">
                    @csrf
                    <input class="form-control me-2"name="text"  type="search" placeholder="Search" >
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
                <!-- Botón de iniciar sesión y botón de registrarse -->
                <div class="d-flex">
                    <a class="btn btn-outline-light m-2" href="{{route('login.index')}}">Iniciar Sesion</a>
                    <a class="btn btn-outline-light m-2" href="{{'registro'}}">Registrarse</a>
                </div>
            </div>
        </nav>
