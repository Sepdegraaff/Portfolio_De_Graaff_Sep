<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/icon.png') }}">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans">
    <header class="w-full flex flex-row justify-between py-2 px-12">
        <div class="flex flex-col">
            <a href="{{ route('home') }}"><img class="w-24" src="{{ asset('images/icon.png') }}" alt="logo"></a>
        </div>
        <nav class="flex flex-row place-items-center">

            <div id="hamburger" class="flex flex-col space-y-1 md:hidden">
                <span class="w-7 h-1 bg-black"></span>
                <span class="w-7 h-1 bg-black"></span>
                <span class="w-7 h-1 bg-black"></span>
            </div>

            <div class="flex-row space-x-4 hidden md:flex">
                <a href="#" class="relative group hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0">
                    About
                </a>
                <a href="#" class="relative group hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0">
                    Portfolio
                </a>
                <a href="#" class="relative group hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0">
                    Contact
                </a>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
</body>
</html>
