@extends('layouts.layout')

@section('content')
    <section class="flex flex-col">
        <div class="flex flex-col w-full place-items-center pb-12 text-black">
            <div class="flex flex-col place-items-center p-4 md:p-12 gap-y-6">
                <h1 class="text-5xl md:text-7xl hidden-animation transition-all duration-700">
                    Sep de Graaff
                </h1>
                <p class="font-light italic hidden-animation transition-all duration-[1.5s]">
                    Software developer
                </p>
            </div>
            <span class="w-full h-0.5 bg-gray-100"></span>
        </div>
    </section>
    <section class="flex flex-col place-items-center m-auto">
        <div class="flex flex-col place-items-center p-12">
            <div class="grid grid-cols-1 md:grid-cols-2 p-4 max-w-[80%]">
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
                    <div class="-z-[1] md:z-0 flex flex-col m-1 max-w-max hidden-animation transition-all duration-[1.5s]">
                        <a class="relative hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0" href="#">Lees meer &rarr;</a>
                    </div>
                </div>
                <div class="flex flex-col justify-center place-items-center">
                    <img class="w-[30rem] hidden-animation transition-all duration-700" src="{{ asset('images/homepage_image.jpeg') }}" alt="image">
                </div>
            </div>
        </div>
        <span class="w-full h-0.5 bg-gray-100"></span>
    </section>
    <section class="flex flex-col">
        <div class="flex flex-col justify-between py-12 px-4">
            <div class="flex flex-col md:flex-row gap-12 place-items-center">
                <img class="hidden-animation transition-all duration-700 w-[500px]" src="{{ asset('images/landscape-placeholder.svg') }}" alt="placeholder">
                <div class="flex flex-col justify-center">
                    <div class="hidden-animation flex flex-col max-w-max transition-all duration-700">
                        <h2 class="text-5xl md:text-7xl">
                            Project 1
                        </h2>
                        <span class="w-full h-1 bg-red-800 mt-2 ml-1"></span>

                    </div>
                    <div class="mt-2 ml-1 flex flex-col max-w-[70%] justify-center gap-4 font-light">
                        <p class="hidden-animation transition-all duration-[1.5s]">
                            <strong>Project 1:</strong> Een webapplicatie gebouwd voor het beheren van taken. Gebruikers kunnen hun takenlijsten bijhouden, prioriteiten instellen en deadlines beheren. Dit project is ontwikkeld met behulp van <strong>Laravel</strong> en <strong>Vue.js</strong>.
                        </p>
                        <p class="hidden-animation transition-all duration-[1.5s]">
                            <strong>Project 2:</strong> Een API gebaseerd systeem ontwikkeld voor online boekingsdiensten. Hiermee kunnen klanten afspraken maken, services selecteren en betalingen beheren. De backend is gebouwd met <strong>Node.js</strong> en <strong>MySQL</strong>.
                        </p>
                        <p class="hidden-animation transition-all duration-[1.5s]">
                            <strong>Project 3:</strong> Een mobiele app voor realtime chat en bestandsdeling, ontworpen met <strong>Flutter</strong>. De focus lag op een intuïtieve gebruikerservaring en een schaalbare backend voor honderden gelijktijdige gebruikers.
                        </p>
                        <p class="hidden-animation transition-all duration-[1.5s]">
                            <strong>Project 4:</strong> Een dashboard gebouwd voor data-analyse en visualisatie van verkoopgegevens. Dit project maakt gebruik van <strong>Python</strong>, <strong>Pandas</strong> en <strong>Plotly</strong> om bedrijfsinzichten visueel aantrekkelijk te presenteren.
                        </p>
                    </div>

                    <div class="-z-[1] md:z-0 flex flex-col m-1 max-w-max hidden-animation transition-all duration-[1.5s]">
                        <a class="relative hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0" href="#">Lees meer &rarr;</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
