@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <div class="font-semibold bg-gray-400 w-44 rounded-full pl-2 pr-2  font-semibold md:mt-12" style="font-family: cursive">POPULAR SHOWS</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                @foreach($popularShows as $tvShow)
                    <x-tv-show-card :tvShow="$tvShow" :genres="$genres" />
                @endforeach
            </div>
        </div> <!-- end popular movies -->
        <div class="now-playing-movies py-24">
            <div class="font-semibold bg-gray-400 w-44 rounded-full pl-2 pr-2 font-semibold md:mt-12" style="font-family: cursive">TOP RATED</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                @foreach($topRated as $tvShow)
                    <x-tv-show-card :tvShow="$tvShow" :genres="$genres" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
