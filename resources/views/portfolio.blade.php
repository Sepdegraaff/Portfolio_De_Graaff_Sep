@extends('layouts.layout')

@section('title', 'Portfolio')

@section('content')
    <section class="flex flex-col py-24">
        <div class="flex flex-col place-items-center mb-[1000px]">
            <h1 class="hidden-animation text-5xl font-bold text-cente transition-all duration-700">
                Begin hier <a href="#scroll-section-3">&downarrow;</a>
            </h1>
        </div>
    </section>
    <div class="absolute overflow-x-hidden z-50 font-light text-black w-full place-items-center text-center mt-[1000px] p-4">
        <div class="h-[100vh] flex flex-col place-items-center">
            <div class="hidden-animation flex flex-col max-w-max transition-all duration-700">
                <h2 class="text-5xl font-bold md:text-7xl">
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
    <section id="scroll-section-3" class="relative h-[150vh]">
        <div class="scale-up-on-scroll-3 w-[50vh] h-[50vh] bg-gray-500 sticky top-0 place-self-center transition-all duration-300 ease-in-out"></div>
    </section>
    <section id="scroll-section-4" class="relative h-[150vh]">
        <div class="scale-up-on-scroll-4 w-[50vh] h-[50vh] bg-gray-400 sticky top-0 place-self-center transition-all duration-300 ease-in-out"></div>
    </section>
    <section id="scroll-section-5" class="relative h-[150vh]">
        <div class="scale-up-on-scroll-5 w-[50vh] h-[40vh] bg-gray-300 sticky top-0 place-self-center transition-all duration-300 ease-in-out"></div>
    </section>
    <section id="scroll-section-6" class="relative h-[20vh]">
        <div class="scale-up-on-scroll-6 w-[50vh] h-[30vh] bg-white sticky top-0 place-self-center transition-all duration-300 ease-in-out"></div>
    </section>
    <section id="scroll-section-7" class="flex flex-col mt-[300px] relative w-full place-items-end h-[300vh]">
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
    <section class="flex flex-col mt-[500px] px-4 py-24 m-auto">
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
@endsection
