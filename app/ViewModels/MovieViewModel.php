<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class MovieViewModel extends ViewModel
{

    public $movie;
    public $genres;

    public function __construct($movie)
    {
        $this->movie = $movie;
    }

    public function movie_info()
    {
        return collect($this->movie)->merge([
            'poster_path' => 'https://image.tmdb.org/t/p/w500' . $this->movie['poster_path'],
            'release_date' => $this->movie['release_date']
                ? \Carbon\Carbon::parse($this->movie['release_date'])->format('M d, Y')
                : 'unknown',
            'genres' => $this->getGenres(),
        ])->dump();
    }

    public function getGenres()
    {
        return collect($this->genres)->map(function($genre){
            return collect($genre)->merge([
                'genr_name' => $genre['name']
            ]);
        });
    }
}
