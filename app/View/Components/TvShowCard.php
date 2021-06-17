<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TvShowCard extends Component
{
    public $tvShow;
    public $genres;

    public function __construct($tvShow,$genres)
    {
        $this->tvShow=$tvShow;
        $this->genres=$genres;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tv-show-card');
    }
}
