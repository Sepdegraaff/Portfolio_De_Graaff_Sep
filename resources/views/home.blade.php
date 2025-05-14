@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    @include('layouts.header')
    <section class="flex flex-col place-items-center m-auto">
        <div class="flex flex-col place-items-center px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 p-4 md:max-w-[80%]">
                <div class="flex flex-col gap-4">
                    <div class="hidden-animation flex flex-col max-w-max transition-all duration-700">
                        <h2 class="text-5xl md:text-7xl">
                            Over mij
                        </h2>
                        <span class="w-full h-1 bg-red-800 mt-2 ml-1"></span>
                    </div>
                    <div class="mt-2 ml-1 flex flex-col justify-center gap-4 font-light">
                        <p class="hidden-animation transition-all duration-[1.5s]">
                            Mijn naam is <strong>Sep de Graaff</strong>, ik ben <strong>19 jaar</strong> en woon in <strong>Waalwijk</strong>. Op dit moment studeer ik <strong>Software Development</strong> aan het <strong>Koning Willem I College</strong> in Den Bosch. Ik ben iemand die graag <strong>leert door te doen</strong> en me continu wil verbeteren in het bouwen van <strong>slimme, praktische softwareoplossingen</strong>.
                        </p>
                        <p class="hidden-animation transition-all duration-[1.5s]">
                            Ik heb een brede interesse in technologie, maar mijn focus ligt vooral op <strong>backend development</strong> en het <strong>logisch structureren van code</strong>. Ik werk graag aan projecten waarin ik mijn <strong>creativiteit</strong> kan combineren met <strong>technische kennis</strong>. Buiten school om verdiep ik me regelmatig in <strong>nieuwe programmeertalen en frameworks</strong>, en bouw ik <strong>kleine tools of applicaties</strong> om mezelf uit te dagen.
                        </p>
                        <p class="hidden-animation transition-all duration-[1.5s]">
                            Naast programmeren heb ik een grote passie voor <strong>muziek produceren</strong>. Die <strong>creatieve kant</strong> helpt me ook in mijn werk als developer: het leren denken in <strong>lagen, structuur en ritme</strong> zie ik terug in beide werelden.
                        </p>
                        <p class="hidden-animation transition-all duration-[1.5s]">
                            In mijn <strong>portfolio</strong> vind je projecten waar ik <strong>trots</strong> op ben, van <strong>schoolopdrachten</strong> tot <strong>persoonlijke experimenten</strong>. Mijn doel is om door te groeien tot een <strong>professionele developer</strong> die meewerkt aan <strong>innovatieve en betrouwbare software</strong>.
                        </p>
                    </div>
                    <div class=" md:z-0 flex flex-col m-1 max-w-max hidden-animation transition-all duration-[1.5s]">
                        <a class="relative hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0" href="{{ route('portfolio') }}">Portfolio &rarr;</a>
                    </div>
                </div>
                <div class="flex flex-col justify-center place-items-center">
                    <img class="w-[30rem] hidden-animation transition-all duration-700" src="{{ asset('images/homepage_image.jpeg') }}" alt="image">
                </div>
            </div>
        </div>
        <span class="w-full h-0.5 bg-gray-100"></span>
    </section>
    <section id="scroll-section-1" class="vid z-[49] h-[600vh] relative">
        <div class="sticky top-0 hidden-animation w-full object-cover transition-all duration-700 flex flex-col place-items-center mb-[500px] scale-up-on-scroll-1">
            <div class="absolute w-full h-full inset-0 bg-black/30 z-[1]"></div>
            <img src="{{ asset('images/36.png') }}" alt="data-platgeslagen">
        </div>
        <div class="absolute font-light text-black w-full place-items-center text-center mt-[500px] p-4">
            <div class="h-[100vh] flex flex-col place-items-center">
                <div class="hidden-animation flex flex-col max-w-max transition-all duration-700">
                    <a target="_blank" href="{{ url('https://data-platgeslagen.nl') }}" class="text-5xl font-bold md:text-7xl">
                        data-platgeslagen.nl
                    </a>
                    <span class="w-full h-1 bg-red-800 mt-2 ml-1"></span>
                </div>
            </div>
            <div class="h-[100vh] flex flex-col place-items-center">
                <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                    Een webapplicatie gebouwd voor het A.I evenement van Hittra & Divtag.
                </p>
                <div class="grid grid-cols-2 mt-10 gap-4">
                    <a target="_blank" href="{{ url('https://divtag.nl/') }}"><img src="{{ asset('images/divtag-logo.svg') }}" alt="divtag"></a>
                    <a target="_blank" href="{{ url('https://hittra.eu/') }}"><img src="{{ asset('images/icon-hittra.svg') }}" alt="hittra"></a>
                </div>
            </div>
            <div class="h-[100vh] flex flex-col place-items-center">
                <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                    Gebruikers kunnen inschrijven, berichten sturen en inloggen via een 'magic login link'.
                </p>
            </div>
            <div class="h-[100vh] flex flex-col place-items-center">
                <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">
                    Dit project is ontwikkeld met behulp van <strong>Laravel</strong> en <strong>Tailwind.css</strong>.
                </p>
                <div class="-z-[1] md:z-0 flex flex-col m-1 max-w-max hidden-animation transition-all duration-[1.5s]">
                    <a class="relative hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0" href="{{ route('portfolio') }}/#projects">Lees meer &rarr;</a>
                </div>
            </div>
        </div>
        <span class="w-full h-0.5 bg-gray-100"></span>
    </section>

{{--    <section id="scroll-section-2" class="z-[49] h-[600vh] relative">--}}
{{--        <div class="hidden-animation scale-[2] md:scale-[1] transition-all duration-700 flex flex-col place-items-center p-12 sticky top-0 scale-up-on-scroll-2">--}}
{{--            <img class="sticky min-h-[800px]" src="{{ asset('images/landscape-placeholder.svg') }}" alt="placeholder">--}}
{{--        </div>--}}
{{--        <div class="absolute w-full place-items-center text-center mt-[500px] mb-[2000px] p-4">--}}
{{--            <div class="h-[100vh] flex flex-col place-items-center">--}}
{{--                <div class="hidden-animation flex flex-col max-w-max transition-all duration-700">--}}
{{--                    <h2 class="text-5xl md:text-7xl">--}}
{{--                        Project 2--}}
{{--                    </h2>--}}
{{--                    <span class="w-full h-1 bg-red-800 mt-2 ml-1"></span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="h-[100vh] flex flex-col place-items-center">--}}
{{--                <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">--}}
{{--                    Een API gebaseerd systeem ontwikkeld voor online boekingsdiensten.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="h-[100vh] flex flex-col place-items-center">--}}
{{--                <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">--}}
{{--                    Hiermee kunnen klanten afspraken maken, services selecteren en betalingen beheren.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="h-[100vh] flex flex-col place-items-center">--}}
{{--                <p class="hidden-animation transition-all duration-[1.5s] text-4xl md:max-w-[50%]">--}}
{{--                    De backend is gebouwd met <strong>Node.js</strong> en <strong>MySQL</strong>.--}}
{{--                </p>--}}
{{--                <div class="-z-[1] md:z-0 flex flex-col m-1 max-w-max hidden-animation transition-all duration-[1.5s]">--}}
{{--                    <a class="relative hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0" href="#">Lees meer &rarr;</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <span class="w-full h-0.5 bg-gray-100"></span>--}}
{{--    </section>--}}
    <div class="h-[30vh]">

    </div>
@endsection
