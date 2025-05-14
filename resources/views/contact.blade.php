@extends('layouts.layout')

@section('title', 'contact')

@section('content')
    @include('layouts.header')
    <section class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex flex-col gap-4 items-center hidden-animation transition-all duration-700">
            <img class="object-contain max-w-[500px] min-h-full" src="{{ asset('images/Profile_Picture.png') }}" alt="face">
        </div>
        <div class="hidden-animation flex flex-col gap-4 transition-all duration-700">
            <h2 class="text-5xl">
                Contactgegevens
            </h2>
            <div class="flex flex-col gap-6 font-light text-xl">
                <div class="flex flex-col gap-2 hidden-animation transition-all duration-700">
                    <p>Naam</p>
                    <span class="w-full h-0.5 bg-gray-100"></span>
                </div>

                <p class="text-base hidden-animation transition-all duration-[1.5s]">
                    Sep de Graaff
                </p>

                <div class="flex flex-col gap-2 hidden-animation transition-all duration-700">
                    <p>Email</p>
                    <span class="w-full h-0.5 bg-gray-100"></span>
                </div>

                <p class="text-base hidden-animation transition-all duration-[1.5s]">
                    sep.degraaff@edu-kw1c.nl
                </p>

                <div class="flex flex-col gap-2 hidden-animation transition-all duration-700">
                    <p>Telefoonnummer</p>
                    <span class="w-full h-0.5 bg-gray-100"></span>
                </div>

                <p class="text-base hidden-animation transition-all duration-[1.5s]">
                    06-23521416
                </p>

            </div>
        </div>
    </section>
@endsection
