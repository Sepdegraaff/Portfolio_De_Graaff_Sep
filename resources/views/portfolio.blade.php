@extends('layouts.layout')

@section('title', 'Portfolio')

@section('content')
    @include('layouts.header')
    <section class="flex-col py-24 hidden md:flex">
        <div class="flex flex-col place-items-center mb-[1000px] gap-4">
            <h1 class="hidden-animation text-5xl font-bold text-cente transition-all duration-700">
                Begin hier <a href="#scroll-section-3">&downarrow;</a>
            </h1>
            <p class="font-light">
                Of skip naar de <a class="font-normal" href="#scroll-section-11">projecten &downarrow;</a>
            </p>
        </div>
    </section>
    <div class="absolute hidden md:block overflow-x-hidden z-[49] font-light text-black w-full place-items-center text-center mt-[1000px] p-4">
        <div class="h-[100vh] flex flex-col place-items-center">
            <div class="hidden-animation flex flex-col max-w-max transition-all duration-700">
                <h2 class="text-5xl font-light md:text-7xl">
                    Welkom bij mijn portfolio!
                </h2>
                <span class="w-full h-1 bg-red-800 mt-2 ml-1"></span>
            </div>
        </div>
        <div class="h-[100vh] flex flex-col place-items-center">
            <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                Hier krijgt u mijn werk ervaring en projecten zien!
            </p>
        </div>
        <div class="h-[100vh] flex flex-col place-items-center">
            <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                Bent u al benieuwd?
            </p>
        </div>
        <div class="h-[100vh] flex flex-col place-items-center">
            <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                Eerst mijn werk ervaring
            </p>
        </div>
    </div>
    <section id="scroll-section-3" class="hidden md:block relative h-[150vh]">
        <div class="scale-up-on-scroll-3 w-[50vh] h-[50vh] bg-gray-500 sticky top-0 place-self-center transition-all duration-300 ease-in-out"></div>
    </section>
    <section id="scroll-section-4" class="hidden md:block relative h-[150vh]">
        <div class="scale-up-on-scroll-4 w-[50vh] h-[50vh] bg-gray-400 sticky top-0 place-self-center transition-all duration-300 ease-in-out"></div>
    </section>
    <section id="scroll-section-5" class="hidden md:block relative h-[150vh]">
        <div class="scale-up-on-scroll-5 w-[50vh] h-[40vh] bg-gray-300 sticky top-0 place-self-center transition-all duration-300 ease-in-out"></div>
    </section>
    <section id="scroll-section-6" class="hidden md:block relative h-[20vh]">
        <div class="scale-up-on-scroll-6 w-[50vh] h-[30vh] bg-white sticky top-0 place-self-center transition-all duration-300 ease-in-out"></div>
    </section>
    <section id="scroll-section-7" class="hidden md:flex flex-col mt-[300px] relative w-full place-items-end h-[300vh]">
        <div class="hidden-animation scale-[1] transition-all duration-700 flex flex-col place-items-center md:p-12 sticky top-0 scale-up-on-scroll-7">
            <img class="sticky min-h-[800px] hidden md:block" src="{{ asset('images/maxserv.jpg') }}" alt="maxserv">
        </div>

        <div class="absolute w-full md:text-white flex flex-col h-[300vh] place-items-end px-8 mt-[500px]">
            <div class="h-[100vh]">
                <div class="hidden-animation flex flex-col max-w-max transition-all duration-700">
                    <h2 class="text-5xl font-bold md:text-7xl">
                        Maxserv
                    </h2>
                    <span class="w-full h-1 bg-red-800 mt-2 ml-1"></span>
                </div>
            </div>
            <div class="h-[100vh] font-light flex flex-col place-items-end max-w-max">
                <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                    Hier heb ik gewerkt aan een websites & php packages
                </p>
            </div>
            <div class="h-[100vh] font-light flex flex-col place-items-end max-w-max">
                <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                    Ik heb hier voor het eerst gewerkt met Jira & Laravel
                </p>
            </div>
            <div class="h-[100vh] font-light flex flex-col place-items-end max-w-max">
                <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                    2023 - 2024
                </p>
            </div>
        </div>
    </section>
    <section class="flex flex-col md:mt-[500px] px-4 py-24 m-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 m-auto max-w-[90%] place-items-center">
            <div class="hidden-animation flex flex-col place-items-center transition-all duration-700">
                <img src="{{ asset('images/maxserv-1.png') }}" alt="maxserv">
            </div>

            <div class="flex flex-col">
                <div class="hidden-animation place-items-center flex flex-col max-w-max transition-all duration-700">
                    <h2 class="text-5xl font-bold md:text-7xl">
                        Maxserv
                    </h2>
                    <span class="w-full h-1 bg-red-800 mt-2 ml-1"></span>
                </div>

                <div class="mt-6 space-y-6">
                    <p class="hidden-animation transition-all duration-[1.5s] text-xl md:text-2xl font-light">
                        Tijdens mijn tijd bij <strong>Maxserv</strong> heb ik gewerkt aan diverse <strong>PHP-packages</strong> en <strong>websites</strong>, waarbij ik hands-on ervaring heb opgedaan met <strong>Laravel</strong> en <strong>Jira</strong>.
                    </p>
                    <p class="hidden-animation transition-all duration-[1.5s] text-xl md:text-2xl font-light">
                        Ik werkte nauw samen met collega’s om krachtige en schaalbare oplossingen te bouwen.
                    </p>
                    <p class="hidden-animation transition-all duration-[1.5s] text-xl md:text-2xl font-light">
                        Mijn rol heeft me geleerd hoe je complexe functionaliteiten met een sterke focus op structuur en gebruiksvriendelijkheid ontwikkelt. Daarnaast kreeg ik de kans om mijn vaardigheden in projectbeheer te verbeteren door teams te ondersteunen bij planning en taakverdeling.
                    </p>
                    <p class="hidden-animation transition-all duration-[1.5s] text-xl md:text-2xl font-light">
                        Het hoogtepunt van mijn tijd bij Maxserv was mijn bijdrage aan het bouwen van een eigen uitbreidbare
                        <a target="_blank" href="{{ url('https://packagist.org/packages/sep/logging-package') }}" class="relative hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0">logging package &rarr;</a>
                        voor het loggen van php code. Deze package is makkelijk zelf uit te breiden en biedt mogelijkheden voor API connectie.
                    </p>
                    <p class="hidden-animation transition-all duration-[1.5s] text-xl md:text-2xl font-light">
                        <strong>Periode:</strong> 2023 - 2024
                    </p>
                    <div class="-z-[1] md:z-0 flex flex-col text-xl md:text-2xl font-light max-w-max hidden-animation transition-all duration-[1.5s]">
                        <a target="_blank" class="relative hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0" href="{{ url('https://www.maxserv.com/') }}">Meer info &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="scroll-section-8" class="hidden md:flex flex-col mt-[300px] relative w-full place-items-end h-[300vh]">
        <div class="hidden-animation scale-[1] transition-all duration-700 flex flex-col place-items-center md:p-12 sticky top-0 scale-up-on-scroll-8">
            <img class="sticky min-h-[800px] hidden md:block" src="{{ asset('images/divtag.jpg') }}" alt="divtag">
        </div>
        <div class="absolute w-full md:text-white flex flex-col h-[300vh] place-items-end px-8 mt-[500px]">
            <div class="h-[100vh]">
                <div class="hidden-animation flex flex-col max-w-max transition-all duration-700">
                    <h2 class="text-5xl font-bold md:text-7xl">
                        Divtag
                    </h2>
                    <span class="w-full h-1 bg-red-800 mt-2 ml-1"></span>
                </div>
            </div>
            <div class="h-[100vh] font-light flex flex-col place-items-end max-w-max">
                <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[80%]">
                    Hier heb ik gewerkt aan een de
                    <span class="-z-[1] md:z-0 flex flex-col max-w-max font-light hidden-animation transition-all duration-[1.5s]">
                        <a target="_blank" class="font-bold relative hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0" href="{{ url('https://data-platgeslagen.nl') }}">data-platgeslagen.nl &rarr;
                        </a>
                    </span>
                    website
                </p>
            </div>
            <div class="h-[100vh] font-light flex flex-col place-items-end max-w-max">
                <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                    Hier heb ik met Jira, Laravel & tailwindcss gewerkt
                </p>
            </div>
            <div class="h-[100vh] font-light flex flex-col place-items-end max-w-max">
                <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                    2024 - 2025
                </p>
            </div>
        </div>
    </section>
    <section class="flex flex-col md:mt-[700px] px-4 py-24 m-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 m-auto max-w-[90%] place-items-center">
            <div class="hidden-animation flex flex-col place-items-center transition-all duration-700">
                <img src="{{ asset('images/divtag-logo-full.svg') }}" alt="divtag">
            </div>

            <div class="flex flex-col">
                <div class="hidden-animation place-items-center flex flex-col max-w-max transition-all duration-700">
                    <h2 class="text-5xl font-bold md:text-7xl">
                        Divtag
                    </h2>
                    <span class="w-full h-1 bg-red-800 mt-2 ml-1"></span>
                </div>

                <div class="flex flex-col mt-6 space-y-6">
                    <p class="hidden-animation transition-all duration-[1.5s] text-xl md:text-2xl font-light">
                        Tijdens mijn tijd bij <strong>Divtag</strong> heb ik gewerkt aan diverse <strong>webapplicaties</strong> en <strong>tools</strong>, waarbij ik hands-on ervaring heb opgedaan met <strong>Laravel</strong>, <strong>TailwindCSS</strong> en <strong>Jira</strong>.
                    </p>
                    <p class="hidden-animation transition-all duration-[1.5s] text-xl md:text-2xl font-light">
                        Ik werkte in een klein team om gebruiksvriendelijke en innovatieve oplossingen te ontwikkelen en implementeren.
                    </p>
                    <p class="hidden-animation transition-all duration-[1.5s] text-xl md:text-2xl font-light">
                        Mijn rol heeft me geleerd hoe je efficiënte applicaties opzet die schaalbaarheid en onderhoud bevorderen. Bovendien kreeg ik de kans mijn vaardigheden in webdesign en frontend-development te verbeteren, naast mijn backend-expertise.
                    </p>
                    <p class="hidden-animation transition-all duration-[1.5s] text-xl md:text-2xl font-light">
                        Het hoogtepunt van mijn tijd bij Divtag was mijn betrokkenheid bij de ontwikkeling van een webapplicatie voor het evenement
                        <span class="flex flex-col max-w-max"><a target="_blank" href="{{ url('https://data-platgeslagen.nl') }}" class="relative hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0">Data Platgeslagen &rarr;</a></span>
                        waarmee gebruikers eenvoudig konden inschrijven, berichten versturen, en inloggen via een 'magic login link'.
                    </p>
                    <p class="hidden-animation transition-all duration-[1.5s] text-xl md:text-2xl font-light">
                        <strong>Periode:</strong> 2024 - 2025
                    </p>
                    <div class="-z-[1] md:z-0 flex flex-col text-xl md:text-2xl font-light max-w-max hidden-animation transition-all duration-[1.5s]">
                        <a target="_blank" class="relative hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0" href="{{ url('https://divtag.nl') }}">Meer info &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="hidden md:block h-[100vh]"></div>
    <div class="hidden md:block absolute overflow-x-hidden z-[49] font-light text-black w-full place-items-center text-center mt-[1000px] p-4">
        <div class="h-[100vh] flex flex-col place-items-center">
            <div class="hidden-animation flex flex-col max-w-max transition-all duration-700">
                <h2 class="text-5xl font-light md:text-7xl">
                    Welkom terug
                </h2>
                <span class="w-full h-1 bg-red-800 mt-2 ml-1"></span>
            </div>
        </div>
        <div class="h-[100vh] flex flex-col place-items-center">
            <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                Nu beginnen we met de projecten waar ik trots op ben
            </p>
        </div>
        <div class="h-[100vh] flex flex-col place-items-center">
            <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                Bent u al benieuwd?
            </p>
        </div>
        <div class="h-[100vh] flex flex-col place-items-center">
            <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                Bij deze mijn projecten
            </p>
        </div>
    </div>
    <section id="scroll-section-9" class="hidden md:block relative h-[150vh]">
        <div class="scale-up-on-scroll-9 w-[50vh] h-[50vh] bg-gray-500 sticky top-0 place-self-center transition-all duration-300 ease-in-out"></div>
    </section>
    <section id="scroll-section-10" class="hidden md:block relative h-[150vh]">
        <div class="scale-up-on-scroll-10 w-[50vh] h-[50vh] bg-gray-400 sticky top-0 place-self-center transition-all duration-300 ease-in-out"></div>
    </section>
    <section id="scroll-section-11" class="hidden md:block relative h-[150vh]">
        <div class="scale-up-on-scroll-11 w-[50vh] h-[40vh] bg-gray-300 sticky top-0 place-self-center transition-all duration-300 ease-in-out"></div>
    </section>
    <section id="scroll-section-12" class="hidden md:block relative h-[20vh]">
        <div class="scale-up-on-scroll-12 w-[50vh] h-[30vh] bg-white sticky top-0 place-self-center transition-all duration-300 ease-in-out"></div>
    </section>
    <div class="hidden md:block h-[100vh]"></div>
    <section id="projects" class="pb-[100px] py-12 overflow-hidden">
        <div class="relative w-full">
            <div class="relative h-screen w-full flex items-center justify-center">
                <div class="mySlide absolute inset-0 items-center justify-center transition-transform duration-700 ease-in-out opacity-0 translate-x-full z-0">
                    <div class="p-6 shadow-sm rounded-xl flex flex-col sm:flex-row gap-6 w-full max-w-6xl min-h-max justify-center">
                        <div class="flex flex-col">
                            <img src="{{ asset('images/logger-package.png') }}" alt="logger-package" class="min-w-full md:min-h-[500px] max-w-[500px] object-contain">
                        </div>
                        <div class="flex flex-col text-center sm:text-left hidden-animation transition-all duration-700">
                            <h2 class="text-3xl sm:text-5xl mb-4">Logger package</h2>
                            <p class="hidden-animation transition-all duration-[1.5s] text-lg font-light sm:text-xl">Hier heb ik een PHP-logger package gecreeërd op basis van PSR-13 standaard. Met deze package kun je gemakkelijk foutmeldingen loggen naar verschillende middelen zoals: een log bestand, slack en kun je het zelf gemakkeijk uitbreiden voor je eigen doeleinde</p>
                        </div>
                    </div>
                </div>

                <div class="mySlide absolute inset-0 items-center justify-center transition-transform duration-700 ease-in-out opacity-0 translate-x-full z-0">
                    <div class="p-6 shadow-sm rounded-xl flex flex-col sm:flex-row gap-6 w-full max-w-6xl min-h-max justify-center">
                        <div class="flex flex-col ">
                            <img src="{{ asset('images/data-platgeslagen-2.png') }}" alt="data-platgeslagen" class="min-w-full md:min-h-[500px] max-w-[500px] object-contain">
                        </div>
                        <div class="flex flex-col text-center sm:text-left hidden-animation transition-all duration-700">
                            <h2 class="text-3xl sm:text-5xl mb-4">data-platgeslagen.nl</h2>
                            <p class="hidden-animation transition-all duration-[1.5s] text-lg font-light sm:text-xl">Dit project was gemaakt voor het bedrijf Divtag om aanmeldingen op te slaan en voor gebruikers om informatie te krijgen over hun evenement. In dit project zaten functies zoals: API connecties met mailchimp, Magic login en creative styling</p>
                        </div>
                    </div>
                </div>

                <div class="mySlide absolute inset-0 items-center justify-center transition-transform duration-700 ease-in-out opacity-0 translate-x-full z-0">
                    <div class="p-6 shadow-sm rounded-xl flex flex-col sm:flex-row gap-6 w-full max-w-6xl min-h-max justify-center">
                        <div class="flex flex-col ">
                            <img src="{{ asset('images/hourbridge.png') }}" alt="hourbridge" class="min-w-full md:min-h-[500px] max-w-[500px] object-contain">
                        </div>
                        <div class="flex flex-col text-center sm:text-left hidden-animation transition-all duration-700">
                            <h2 class="text-3xl sm:text-5xl mb-4">SLA Rapportage (Hourbridge extenstion)</h2>
                            <p class="hidden-animation transition-all duration-[1.5s] text-lg font-light sm:text-xl">Dit project voor het bedrijf Divtag is gemaakt op erg makkelijk via een zelf gemaakte PDF editor SLA rapportage te creeën. Dit maakt het proces erg makkelijk sinds je niet meer elke ticket apart moet opzoeken en uitschrijven. Nu worden de tickets automatisch ingeladen in een tabel en moet je alleen de bijzonderheden nog invullen.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-24"></div>
            <button id="prevBtn" class="absolute  h-max left-4 -bottom-12 md:top-1/2 transform -translate-y-1/2 bg-white bg-opacity-70 hover:bg-opacity-100 text-gray-800 py-2 px-3.5 rounded-full shadow-md z-20 cursor-pointer">
                &#10094;
            </button>
            <button id="nextBtn" class="absolute h-max right-4 -bottom-12 md:top-1/2 transform -translate-y-1/2 bg-white bg-opacity-70 hover:bg-opacity-100 text-gray-800 py-2 px-3.5 rounded-full shadow-md z-20 cursor-pointer">
                &#10095;
            </button>
        </div>
    </section>
@endsection
