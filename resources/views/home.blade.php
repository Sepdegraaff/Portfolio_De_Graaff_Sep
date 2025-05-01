@extends('layouts.layout')

@section('content')
    <section class="flex flex-col">
        <div class="flex flex-col w-full place-items-center pb-12 text-black">
            <div class="flex flex-col place-items-center p-4 md:p-12 gap-y-6">
                <h1 class="text-5xl md:text-7xl transition-all duration-500">
                    Sep de Graaff
                </h1>
                <p class="font-light italic">
                    Software developer
                </p>
            </div>
            <span class="w-full h-0.5 bg-gray-100"></span>
        </div>
    </section>
    <section>
        <div class="flex flex-col text-black">
            <div class="flex flex-row justify-center">
                <div class="flex flex-col justify-around md:flex-row p-12 gap-12">
                    <div class="flex flex-col p-4">
                        <div class="flex flex-col max-w-max">
                            <h2 class="text-5xl md:text-7xl transition-all duration-500">
                                Over mij
                            </h2>
                            <span class="w-full h-1 bg-red-800 mt-2 ml-1"></span>
                        </div>
                        <div class="flex flex-col m-1 max-w-max">
                            <a class="relative group hover:text-red-800 transition-all ease-in-out duration-500 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-0.5 before:bg-red-800 before:transition-all before:duration-500 before:ease-in-out hover:before:w-full hover:before:left-0" href="#">Lees meer &rarr;</a>
                        </div>
                    </div>
                    <img class="w-[40%]" src="{{ asset('images/homepage_image.jpeg') }}" alt="image">
                </div>
            </div>
        </div>
    </section>

@endsection
