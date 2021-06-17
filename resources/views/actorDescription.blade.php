@extends('layouts.app')
@section('content')
    <div class="movie-info border-b border-gray-800 pt-16">
        <div class="container mx-auto px-4 py-16 flex flex-col items-center md:flex-row">
            <div class="flex-none">
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$actor['profile_path']}}" alt="poster" class="w-64 lg:w-96">
            </div>
            <div class="md:ml-24" x-data="{isOpen:false}">
                <a href="" class="text-lg mt-2 hover:text-gray-300 bg-gray-400 w-36 rounded-full pl-2 pr-2">{{$actor['name']}}</a>
                <div class="flex items-center text-gray-400 mt-1">
                    <img src="https://image.flaticon.com/icons/png/128/2636/2636869.png" class="w-4 h-4" alt="">
                    <span class="ml-1">Popularity: {{$actor['popularity']}}</span>
                    <span class="ml-1">| </span>
                    <span class="ml-1 flex items-center">
                        <img src="https://image.flaticon.com/icons/png/128/3034/3034068.png" class="mr-1 ml-1 w-4 h-4" alt="Born On: ">
                        {{\Carbon\Carbon::parse(($actor['birthday']))->format('M d,Y')}}
                    </span>
                </div>

                <p class="mt-8 text-gray-300">
                    {{$actor['biography']}}
                </p>
            </div>
        </div>
    </div> <!--end movie info -->
@endsection
