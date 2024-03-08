
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body class="font-[Poppins] bg-grey h-screen m-4">
    <header class="bg-sky-800">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            <div>
                <h1 class="text-white text-2xl font-bold">Centro de Formacion</h1>
            </div>
            <div
                class="nav-links text-white duration-500 md:static bg-sky-800 absolute md:min-h-fit left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center mt-3 md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-black" href="/">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-black" href="{{ route('privada') }}">Cursos</a>
                    </li>
                    <li>
                        <form class="px-4 py-2" action="/search" method="GET">
                            @csrf
                            <input class="rounded-lg py-1 px-2 bg-gray-100 text-gray-800 focus:outline-none"
                                name="text" type="search" placeholder="Search">
                        </form>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
 
                @if (Auth::check())
                    <button>
                        <a class="flex m-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('privada') }}">Profile</a>
                    </button>
                @else
                    <button>
                        <a class="flex m-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('login') }}">Login</a>
                    </button>
                                    <button>
                    <a class="flex m-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ 'registro' }}">Registrarse</a>
                </button>
                @endif
            

                <ion-icon onclick="onToggleMenu(this)" name="menu"
                    class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
    </header>



    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</body>

