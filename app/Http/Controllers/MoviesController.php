<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index() {
        $popularMovies= Http::withToken(config('services.tmdb.token'))
                        ->get('https://api.themoviedb.org/3/movie/popular')->json()['results'];

        $nowPlaying= Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')->json()['results'];

        $genresArray= Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];

        $genres= collect($genresArray)->mapWithKeys(function ($genre){
            return [$genre['id']=>$genre['name']];
        });

        return view('index',[
            'popularMovies'=>$popularMovies,
            'nowPlaying'=>$nowPlaying,
            'genres'=>$genres
        ]);
    }

    public function show($id) {
        $movie= Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images,reviews')->json();
//        dump($movie);
        return view('show',[
            'movie'=>$movie,
        ]);
    }
}
