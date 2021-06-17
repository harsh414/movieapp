<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvshowsController extends Controller
{
    public function index()
    {
        $popularShows = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/popular')->json()['results'];


        $topRated = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/top_rated')->json()['results'];

        $genresArray = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        return view('tv.index', [
            'popularShows' => $popularShows,
            'topRated' => $topRated,
            'genres' => $genres
        ]);
    }

    public function show($id)
    {
        $show = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/' . $id . '?append_to_response=credits,videos,images,reviews')->json();
//        dd($show);
        return view('tv.show', [
            'show' => $show,
        ]);
    }
}


