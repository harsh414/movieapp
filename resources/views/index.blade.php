@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <div class="tracking-wider text-yellow-400 text-lg font-semibold" style="font-family: cursive">POPULAR MOVIES</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                @foreach($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach
            </div>
        </div> <!-- end popular movies -->
        <div class="now-playing-movies py-24">
            <div class="tracking-wider text-yellow-400 text-lg font-semibold" style="font-family: cursive">NOW PLAYING</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                @foreach($nowPlaying as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
