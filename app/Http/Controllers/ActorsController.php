<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ActorsController extends Controller
{
    public function index() {
        return view('actors');
    }

    public function actorDescription($id) {
        $actor = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/person/'.$id)->json();
        return view('actorDescription',[
            'actor'=>$actor
        ]);
    }
}
