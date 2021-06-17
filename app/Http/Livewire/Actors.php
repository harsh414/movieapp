<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Actors extends Component
{
    public $page=1;
    public function render()
    {
        $actors = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/person/popular?page=' . $this->page)->json()['results'];

        return view('livewire.actors', [
            'actors' => $actors,
        ]);
    }

    public function incrementPage() {
        $this->page = $this->page+1;
    }

    public function decrementPage() {
        $this->page= $this->page==1 ? 1 :$this->page - 1 ;
    }


}
