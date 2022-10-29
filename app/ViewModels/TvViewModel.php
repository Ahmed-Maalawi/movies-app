<?php

namespace App\ViewModels;

use Illuminate\Support\Carbon;
use Spatie\ViewModels\ViewModel;

class TvViewModel extends ViewModel
{
    public $popularTv;
    public $topRatedTv;
    public $genres;
    public function __construct($popularTv, $topRatedTv, $genres)
    {
        $this->popularTv = $popularTv;
        $this->topRatedTv = $topRatedTv;
        $this->genres = $genres;
    }


    public function popularTv()
    {
        return collect($this->popularTv)->map(function ($tvshow) {
            return collect($tvshow)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$tvshow['poster_path'],
                'first_air_date' => Carbon::parse($tvshow['first_air_date'])->format('M d, Y'),
            ])->only([
                'poster_path', 'id', 'genre_ids', 'name', 'vote_average', 'overview', 'first_air_date', 'genres',
            ]);
        });
    }

    public function topRatedTv()
    {
        return collect($this->topRatedTv)->map(function ($tvshow) {
            return collect($tvshow)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $tvshow['poster_path'],
                'first_air_date' => Carbon::parse($tvshow['first_air_date'])->format('M d, Y'),
            ])->only([
                'poster_path', 'id', 'genre_ids', 'name', 'vote_average', 'overview', 'first_air_date', 'genres',
            ]);
        });
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });
    }


    private function formatTv($tv)
    {
        return collect($tv)->map(function($tvShow){
           $genresFormatted = collect($tvShow['genre_ids'])->mapWithKeys(function($genre){
                return [$genre => $this->genres()->get($genre)];
           })->implode(', ');


           return collect($tvShow)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $tvShow['poster_path'],
                'first_air_date' => Carbon::parse($tvShow['first_air_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
           ])->only([
                'poster_path', 'id', 'genre_ids', 'name', 'vote_average', 'overview', 'first_air_date', 'genres'
           ]);
        });


    }
}
