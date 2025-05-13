<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/icon.png') }}">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans overflow-x-hidden">
    <header class="w-full bg-white z-10 h-full max-md:sticky top-0 flex flex-row justify-between py-4 px-12">
        <div class="flex flex-col">
            <a href="{{ route('home') }}"><img class="w-24" src="{{ asset('images/icon.png') }}" alt="logo"></a>
        </div>
        <nav class="flex flex-row place-items-center">

            <button id="hamburger-btn" class="flex md:hidden flex-col space-y-1">
                <span class="block w-8 h-1 bg-black transition-all ease-in-out duration-500"></span>
                <span class="block w-8 h-1 bg-black transition-all ease-in-out duration-500"></span>
                <span class="block w-8 h-1 bg-black transition-all ease-in-out duration-500"></span>
            </button>

            <div class="flex-row space-x-4 hidden md:flex">
                <a href="{{ route('portfolio') }}" class="relative group hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0">
                    Portfolio
                </a>
                <a href="#" class="relative group hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0">
                    Contact
                </a>
            </div>

            <div id="mobile-menu" class="z-50 absolute top-24 pt-12 left-0 h-screen w-full bg-white text-black translate-x-[-150%] transition-all ease-in-out duration-500">
                <div class="p-6 grid gap-y-8 bg-white">
                    <div class="flex flex-col gap-4">
                        <a class="relative group text-2xl font-bold"
                           href="{{ route('portfolio') }}">Portfolio
                        </a>
                        <a class="relative group text-2xl font-bold"
                           href="#">Contact
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="flex flex-col items-center justify-center w-full">
            <span class="w-full h-0.5 bg-gray-100"></span>

            <div class="p-12 font-light">
                <h2>
                    Sep de Graaff | &copy; @php echo date('Y'); @endphp
                </h2>
            </div>
        </div>
    </footer>
</body>
</html>
